<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i <= 100; $i++) {
            DB::table('products')->insert([
                'product_name' => Str::random(10),
                'product_descriptions' => Str::random(10),
                'product_price' => '200',
                'product_category' => 1,
                'product_img' => 'assests_template/assets/images/no_photo.jpg',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')


            ]);
        }
    }
}
