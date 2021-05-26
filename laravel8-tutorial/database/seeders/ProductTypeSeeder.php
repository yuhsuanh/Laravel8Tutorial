<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insert Data to Products Table
        DB::table('product_types')->insert([
            'name' => 'Flag',
        ]);

        DB::table('product_types')->insert([
            'name' => 'Outdoor',
        ]);

        DB::table('product_types')->insert([
            'name' => 'BBQ',
        ]);
    }
}
