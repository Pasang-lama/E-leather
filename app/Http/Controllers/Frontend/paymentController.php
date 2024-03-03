<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cixware\Esewa\Client, Cixware\Esewa\Config;
use Cart, Session, Str, DB, Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Model\Order;

class PaymentController extends Controller
{
    private $esewa_success_url,
        $esewa_failure_url,
        $esewa_merchant_id,
        $gateway_configuration,
        $invoice_id,
        $emailAddress;

    public function __construct()
    {
        $this->middleware(["XssSanitizer"]);
        $this->esewa_success_url = url("/") . "/pay/esewa-success";
        $this->esewa_failure_url = url("/") . "/pay/esewa-fail";
        $this->esewa_merchant_id = env("ESEWA_MERCHANT_CODE", "ES-ELN");
    }

    public function payProcess(Request $request)
    {
        $gateway = $request->input("gateway");
        $total_amount = Session::get("total_cart_value");
        if ($gateway == "esewa") {
            if (\App::environment(["local", "staging", "dev", "development"])) {
                $config = new Config(
                    $this->esewa_success_url,
                    $this->esewa_failure_url
                );
            } else {
                $config = new Config(
                    $this->esewa_success_url,
                    $this->esewa_failure_url,
                    $this->esewa_merchant_id
                );
            }
            $response = $this->_processEsewa($config, $total_amount);
        } elseif ($gateway == "khalti") {
            dd("Khalti is not available");
        } else {
            $title = "Order Success";
            $payment_gateway = Str::ucfirst("Cash on Delivery");
            $order_id = Session::get("invoice_id");

            if ($order_id == NULL) {
                return redirect()->route("frontend.home");
            } else {
                $order_details = Order::where([
                    "order_number" => $order_id,
                    "orders_payment_method" => "cod",
                ])->first();

                if ($order_details->orders_payment_status == "unpaid") {
                    $amount = $order_details->orders_total_amount;
                    $order_details->orders_payment_status = "paid";
                    $order_details->updated_at = Carbon::now()->format(
                        "Y-m-d H:i:s"
                    );
                    $order_details->update();
                    $refid = "";

                    $this->_create_invoice($order_details, true);
                    $this->_forget_payment_session($request);
                    return view(
                        "frontend.paymentsuccess",
                        compact(
                            "title",
                            "payment_gateway",
                            "order_id",
                            "amount",
                            "refid"
                        )
                    );
                } else {
                    return redirect()->route("frontend.home");
                }
            }
        }
    }

    public function _processEsewa($gateway_configuration, $total_amount)
    {
        $invoice_id = Session::get("invoice_id");
        $total_amount = (int) $total_amount;
        $esewa = new Client($gateway_configuration);
        $esewa->process($invoice_id, $total_amount, 0, 0, 0);
    }

    public function esewasuccess(Request $request)
    {
        $order_id = $request->input("oid");
        $amount = $request->input("amt");
        $refid = $request->input("refId");
        $payment_gateway = Str::ucfirst("esewa");
        $title = "Payment Success";

        $order_details = Order::where([
            "order_number" => $order_id,
            "orders_payment_method" => "esewa",
        ])->first();

        if ($order_details->orders_payment_status == "unpaid") {
            $order_details->orders_payment_status = "paid";
            $order_details->updated_at = Carbon::now()->format("Y-m-d H:i:s");
            $order_details->update();
            $this->_create_invoice($order_details, true);
            $this->_forget_payment_session($request);
            return view(
                "frontend.paymentsuccess",
                compact(
                    "title",
                    "payment_gateway",
                    "order_id",
                    "amount",
                    "refid"
                )
            );
        } else {
            return redirect()->route("frontend.home");
        }
    }

    public function esewafail(Request $request)
    {
        $order_id = $request->input("pid");
        $title = "Payment Failed";
        $payment_gateway = Str::ucfirst("esewa");

        return view(
            "frontend.paymentfail",
            compact("title", "payment_gateway", "order_id")
        );
    }

    public function _forget_payment_session($request)
    {
        $visitor_id = Session::get("visitor_id");
        Session::forget("total_cart_value");
        Session::forget("payment_gateway");
        Session::forget("invoice_id");
        Cart::instance($visitor_id)->destroy();

        $updated_data = [
            "delivery_charges" => 0,
            "delivery_address" => "",
            "cart_sub_total" => "",
            "formatted_cart_total" => "",
        ];

        $request->session()->put("delivery_charges", [
            $visitor_id => $updated_data,
        ]);
    }

    public function _create_invoice($order_details, $is_mail_send)
    {
        set_time_limit(0);
        $order_id = $order_details->order_number;
        $order_email = $order_details->orders_email;
        $logo_url = asset("images/book-fallback-logo-81x81.png");
        //$logo_url = ("public/frontend/images/logo.png");
        $attachmentName = "order-" . $order_id . ".pdf";
        $attachmentPath = storage_path($attachmentName);

        $contxt = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE,
            ]
        ]);

        Pdf::setOptions([
            "isHtml5ParserEnabled" => true,
            "isRemoteEnabled" => true,
        ])
            ->setHttpContext($contxt)
            ->loadView(
                "frontend.pdf.order-invoice",
                compact("logo_url", "order_details")
            )
            //->setPaper('A4', 'portrait')
            ->setPaper("A4", "landscape")
            ->setWarnings(false)
            ->save($attachmentPath);

        if ($is_mail_send == true) {
            send_email(
                $order_email,
                "Order Confirmed on " . env("APP_NAME"),
                "mail.ordermail",
                [
                    "details" => [
                        "name" => implode(" ", [
                            $order_details->orders_first_name,
                            $order_details->orders_last_name,
                        ]),
                        "order_number" => $order_details->order_number,
                    ],
                ],
                $attachmentPath,
                $attachmentName
            );
        }

        send_email(
            $this->emailAddress,
            "A new order placed on " . env("APP_NAME"),
            "mail.adminordermail",
            [
                "details" => [
                    "order_number" => $order_details->order_number,
                ],
            ],
            $attachmentPath,
            $attachmentName
        );

        unlink($attachmentPath);
    }
}
