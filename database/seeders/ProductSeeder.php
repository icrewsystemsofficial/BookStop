<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => "Small Pleasures", 
        'price' => "18", 
        'description' => "This is a book to guide us to the best of life's small pleasures.",
        'genre' => "calm",
        'gallery' => "https://www.theschooloflife.com/shop/pub/media/catalog/product/cache/6c2a5caf01241b5c5f2ab13f583665eb/s/m/smallpleasuresbook_0000s_0015_layer_54_resized.jpg"
        ],
        [
            'name' => "On Being Nice", 
        'price' => "15", 
        'description' => "This book wants to help us to be nicer.",
        'genre' => "Social",
        'gallery' => "https://www.theschooloflife.com/shop/pub/media/catalog/product/cache/6c2a5caf01241b5c5f2ab13f583665eb/i/m/img_0002_-_resized_1_1.jpg"
        ],
        [
            'name' => "The Meaning of Life", 
        'price' => "10", 
        'description' => "A practical guide to one of the greatest questions we will ever face.",
        'genre' => "Self-Help",
        'gallery' => "https://www.theschooloflife.com/shop/pub/media/catalog/product/cache/6c2a5caf01241b5c5f2ab13f583665eb/m/e/meaningoflifemain2.jpg"
        ],
        [
            'name' => "How to Reform Capitalism?", 
        'price' => "10", 
        'description' => "Capitalism starts with a clear-eyed understanding of our emotional functioning and the workings of our psyches.",
        'genre' => "work",
        'gallery' => "https://www.theschooloflife.com/shop/pub/media/catalog/product/cache/6c2a5caf01241b5c5f2ab13f583665eb/h/o/how-to-reform-capitalism-2404_v2-resized.jpg"
        ] 
    
        ]);
        }
}
