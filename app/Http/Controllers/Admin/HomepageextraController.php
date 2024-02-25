<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Homepageextra;
use File, Image;

class HomepageextraController extends Controller
{
    private $upload_path;
    private $height_widths;
    private $allowed_fileuploads;
    public function __construct(){
        $this->middleware(["XssSanitizer"]);
        $this->upload_path = public_path('images/homepageextra/');

        $this->allowed_fileuploads = [
            "homepageextra_bannerimage",
            "homepageextra_shortdescriptionimg",
            "homepageextra_mentileimg",
            "homepageextra_womentileimg",
            "homepageextra_kidtileimg",
        ];

        $this->height_widths = [
            "homepageextra_bannerimage" => [
                "width" => "1440",
                "height" => "266",
            ],
            "homepageextra_shortdescriptionimg" => [
                "width" => "587",
                "height" => "331",
            ],
            "homepageextra_mentileimg" => [
                "width" => "385",
                "height" => "377",
            ],
            "homepageextra_womentileimg" => [
                "width" => "385",
                "height" => "377",
            ],
            "homepageextra_kidtileimg" => [
                "width" => "385",
                "height" => "377",
            ],
        ];

        if (!File::isDirectory($this->upload_path)) {
            File::makeDirectory($this->upload_path, 0777, true, true);
        }
    }

    public function index(){
        $suitable_for_groups = suitable_for_groups();
        $homepageextra = Homepageextra::first();
        $title = "Home Page Extra";
        return view("backend.pages.homepageextra.index", compact("suitable_for_groups","homepageextra","title"));
    }

    public function store(Request $request){

        $request->validate(
            [
                "homepageextra_bannerimage" => "mimes:jpeg,png,jpg,gif",
                "homepageextra_bannerlink" => "nullable|url",
                "homepageextra_shortdescription" => "nullable",
                "homepageextra_shortdescriptionimg" => "mimes:jpeg,png,jpg,gif",
                "homepageextra_shortdescriptionlink" => "nullable|url",
                "homepageextra_mentileimg" => "mimes:jpeg,png,jpg,gif",
                "homepageextra_mentilelink" => "nullable|url",
                "homepageextra_womentileimg" => "mimes:jpeg,png,jpg,gif",
                "homepageextra_womentilelink" => "nullable|url",
                "homepageextra_kidtileimg" => "mimes:jpeg,png,jpg,gif",
                "homepageextra_kidtilelink" => "nullable|url"
            ],
            [
                "homepageextra_bannerimage.mimes" => "Banner image should have following extension:jpeg,png,jpg,gif",
                "homepageextra_bannerlink.url" => "Banner link must be valid url",
                "homepageextra_shortdescriptionimg.mimes" => "Short Description image should have following extension:jpeg,png,jpg,gif",
                "homepageextra_shortdescriptionlink.url" => "Short Description Link must be valid url",
                "homepageextra_mentileimg.mimes" => "Men Tile Image should have following extension:jpeg,png,jpg,gif",
                "homepageextra_mentilelink.url" => "Men Tile Link must be valid url",
                "homepageextra_womentileimg.mimes" => "Women Tile Image should have following extension:jpeg,png,jpg,gif",
                "homepageextra_womentilelink.url" => "Women Tile Link must be valid url",
                "homepageextra_kidtileimg.mimes" => "Kid Tile Image should have following extension:jpeg,png,jpg,gif",
                "homepageextra_kidtilelink.url" => "Kid Tile Link must be valid url"
            ]
        );

        $input = $request->all();
        $homepageextra = Homepageextra::first();

        $files_arr = $request->allFiles();
        if(!empty($files_arr)){
            foreach($files_arr as $key => $imagefile){
                if(in_array($key, $this->allowed_fileuploads)){
                    if ($request->hasFile($key)) {
                        $image_dimensions = $this->height_widths;

                        File::delete($this->upload_path.$homepageextra->{$key});
                        
                        $img_tmp = $request->file($key);
                        $extension = $img_tmp->getClientOriginalExtension();
                        $filename = (microtime(10000)*10000).".". $extension;

                        Image::make($img_tmp->getRealPath())
                            ->resize($image_dimensions[$key]["width"], $image_dimensions[$key]["height"])
                            ->save($this->upload_path.$filename);

                        $input[$key] = $filename;
                    }
                }
            }
        }

        $homepageextra->update($input);
        return redirect()
            ->back()
            ->with("success_msg", "Home Page Extra Updated Successfully.");
    }
}
