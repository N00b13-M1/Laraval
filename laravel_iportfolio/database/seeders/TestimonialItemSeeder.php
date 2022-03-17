<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("testimonial_items")->insert([
            "delay"=> null,
            "quote"=> "Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.",
            "picture" => "img/testimonials/testimonials-1.jpg",
            "h4" => "Saul Goodman",
            "h3" => "Ceo &amp; Founder",
            "created_at"=>now()
        ]);
        DB::table("testimonial_items")->insert([
            "delay"=> 100,
            "quote"=> "Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum
            eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim
            culpa.",
            "picture" => "img/testimonials/testimonials-2.jpg",
            "h4" => "Sara Wilsson",
            "h3" => "Designer",
            "created_at"=>now()
        ]);
        DB::table("testimonial_items")->insert([
            "delay"=> 200,
            "quote"=> "Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis
            minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.",
            "picture" => "img/testimonials/testimonials-3.jpg",
            "h4" => "Jena Karlis",
            "h3" => "Store Owner",
            "created_at"=>now()
        ]);
        DB::table("testimonial_items")->insert([
            "delay"=> 300,
            "quote"=> "Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim
            velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum
            veniam.",
            "picture" => "img/testimonials/testimonials-4.jpg",
            "h4" => "Matt Brandon",
            "h3" => "Freelancer",
            "created_at"=>now()
        ]);
        DB::table("testimonial_items")->insert([
            "delay"=> 400,
            "quote"=> "Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam
            enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore
            nisi cillum quid.",
            "picture" => "img/testimonials/testimonials-5.jpg",
            "h4" => "John Larson",
            "h3" => "Entrepreneur",
            "created_at"=>now()
        ]);
        
    }
}
