<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('products')->insert([
            [
                'name'=> 'Puppy in a Bag Disney Princess Style Jakks Pacific',
                'price'=> '103.05',
                'category'=> 'Fluffy', 
                'description'=> 'A combination of high quality plastic and fabric. Does not contain health benefits. For different children from 3 years.', 
                'gallery'=> 'https://www.jakks.com/products/disney-princess-style-collection/img/my-trendy-puppy-n-tote/7110735.jpg', 
            ],
            [
                'name'=> 'Koala Keel Eco Keel Toys',
                'price'=> '49.86',
                'category'=> 'Fluffy', 
                'description'=> 'Made from recycled polyester. It does not have a harmful effect on the environment and does not contain substances harmful to health. It is soft and pleasant to hug.', 
                'gallery'=> 'https://www.threelittlebears.co.uk/user/products/large/koala%20SE1092-cr-800x800.jpg', 
            ],
            [
                'name'=> 'Giraffe Keel Eco Keel Toys',
                'price'=> 'Fluffy',
                'category'=> '50.51', 
                'description'=> 'Made from recycled polyester. It does not have a harmful effect on the environment and does not contain substances harmful to health. It is soft and pleasant to hug.', 
                'gallery'=> 'https://superstore.ge/uploads/2022/12/302806.jpg', 
            ],
            [
                'name'=> 'Panda Keel Eco Keel Toys',
                'price'=> '34.65',
                'category'=> 'Fluffy', 
                'description'=> 'Made from recycled polyester. It does not have a harmful effect on the environment and does not contain substances harmful to health. It is soft and pleasant to hug.', 
                'gallery'=> 'https://superstore.ge/uploads/2022/12/302801.jpg', 
            ],
        ]);
    }
}
