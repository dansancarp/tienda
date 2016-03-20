<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'Playera 1',
                'slug' => 'playera-1',
                'description' => 'Lorem ipsum sit amet consectetur adipicing edlit. Tempore',
                'extract' => 'Lorem ipsum sit amet consectetur',
                'price' => 275.00,
                'image' => 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Red_Batman_Graffiti_Logo_T_Shirt_hi_res.jpg',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 1
            ],
            [
                'name' => 'Playera 2',
                'slug' => 'playera-2',
                'description' => 'Lorem ipsum sit amet consectetur adipicing edlit. Tempore',
                'extract' => 'Lorem ipsum sit amet consectetur',
                'price' => 255.00,
                'image' => 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Red_Batman_Graffiti_Logo_T_Shirt_hi_res.jpg',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 1
            ],
            [
                'name' => 'Playera 3',
                'slug' => 'playera-3',
                'description' => 'Lorem ipsum sit amet consectetur adipicing edlit. Tempore',
                'extract' => 'Lorem ipsum sit amet consectetur',
                'price' => 300.00,
                'image' => 'http://img5a.flixcart.com/image/t-shirt/f/g/q/fsbk-bruce-lee-sayitloud-xl-700x700-imadtkffxfhgsday.jpeg',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 1
            ],
            [
                'name' => 'Playera 4',
                'slug' => 'playera-4',
                'description' => 'Lorem ipsum sit amet consectetur adipicing edlit. Tempore',
                'extract' => 'Lorem ipsum sit amet consectetur',
                'price' => 475.00,
                'image' => 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Red_Batman_Graffiti_Logo_T_Shirt_hi_res.jpg',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 2
            ],
            [
                'name' => 'Playera 5',
                'slug' => 'playera-5',
                'description' => 'Lorem ipsum sit amet consectetur adipicing edlit. Tempore',
                'extract' => 'Lorem ipsum sit amet consectetur',
                'price' => 280.00,
                'image' => 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Red_Batman_Graffiti_Logo_T_Shirt_hi_res.jpg',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 2
            ],
            [
                'name' => 'Playera 6',
                'slug' => 'playera-6',
                'description' => 'Lorem ipsum sit amet consectetur adipicing edlit. Tempore',
                'extract' => 'Lorem ipsum sit amet consectetur',
                'price' => 275.00,
                'image' => 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Red_Batman_Graffiti_Logo_T_Shirt_hi_res.jpg',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 2
            ],
            [
                'name' => 'Playera 7',
                'slug' => 'playera-7',
                'description' => 'Lorem ipsum sit amet consectetur adipicing edlit. Tempore',
                'extract' => 'Lorem ipsum sit amet consectetur',
                'price' => 275.00,
                'image' => 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Red_Batman_Graffiti_Logo_T_Shirt_hi_res.jpg',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 1
            ],
            [
                'name' => 'Playera 8',
                'slug' => 'playera-8',
                'description' => 'Lorem ipsum sit amet consectetur adipicing edlit. Tempore',
                'extract' => 'Lorem ipsum sit amet consectetur',
                'price' => 275.00,
                'image' => 'http://www.truffleshuffle.co.uk/store/images_high_res/Mens_Red_Batman_Graffiti_Logo_T_Shirt_hi_res.jpg',
                'visible' => 1,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'category_id' => 2
            ]
        );
        Product::insert($data);
    }
}