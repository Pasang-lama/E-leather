<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create([
        	"name" => "A1 Leather",
        	"slug" => "a1-leather",
        	"description" => "A1 Leather Nepal Craft",
        	"order" => "1",
        	"logo" => NULL,
        	"created_at" => date("Y-m-d H:i:s"),
        	"updated_at" => date("Y-m-d H:i:s"),
        ]);
    }
}
