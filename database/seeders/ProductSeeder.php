<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>'Red Rose',
                "price"=>"800",
                "category"=>"Romance",
                "description"=>"Latest delivey 2 days",
                "gallery"=>"https://5.imimg.com/data5/GC/IA/KM/SELLER-58405914/flower-bunch-250x250.jpg"
    
            ],
            [
                'name'=>'Pink Rose',
                "price"=>"600",
                "category"=>"Birthday",
                "description"=>"Latest delivey 2 days",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKs5zfSNruE129J_0TqRFxcX8gPxFG2GXEzg&usqp=CAU"
    
            ],
            [
                'name'=>'Light Pink RoseE',
                "price"=>"550",
                "category"=>"Romance",
                "description"=>"Latest delivey 2 days",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOPmpfPa-4cSOldV1eDVAEeznfl3wt1amvYLkq1BsTF2Beet2ezngtvw_yghqk9FIQ7NA&usqp=CAU"
    
            ],
            [
                'name'=>'Mixed Flower Bouquets',
                "price"=>"400",
                "category"=>"Romance",
                "description"=>"Latest delivey 2 days",
                "gallery"=>"https://thumbs.dreamstime.com/b/colorful-wedding-bouquet-white-background-see-my-other-works-portfolio-34826875.jpg"
    
            ],
            [
                'name'=>' Daise Bouquet',
                "price"=>"400",
                "category"=>"Romance",
                "description"=>"Latest delivey 2 days",
                "gallery"=>"https://media.istockphoto.com/photos/bunch-of-pink-peonies-isolated-on-white-background-picture-id497203117?k=6&m=497203117&s=612x612&w=0&h=3TeyfJi7yQlgCZsXLIAGEZ2xVGowHcavcACs2nvYLGM="
            ]
        ]);
    
    }
}
