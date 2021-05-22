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
        //Insert Data to Products Table
        DB::table('products')->insert([
            'name' => 'Canadian Flag',
            'code' => 'FLAG.CA',
            'description' => 'Bold coloured, dispersed dye printed flag',
            'price' => 9.99,
            'stock' => 6,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'name' => 'Outbound Dome Tent with Screen Porch',
            'code' => 'OUT.TL.01',
            'description' => 'Outbound Dome Tent with Screen Porch features a large rain fly with taped seams for great weather protection',
            'price' => 125.99,
            'stock' => 31,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'name' => 'Marine Cooler 113.5L',
            'code' => 'COL.113',
            'description' => 'Coleman Xtreme Marine Cooler features low CO2 insulation for reduced carbon emissions from foam manufacturing',
            'price' => 99.93,
            'stock' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'name' => 'Multi-Fuel Stove',
            'code' => 'STOVE.01',
            'description' => 'Woods Multi-Fuel Stove lets you cook delicious dishes with the superior simmering ability',
            'price' => 74.93,
            'stock' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'name' => 'TaylorMade 5.0 Golf Stand Bag',
            'code' => 'BAG.GOLF1',
            'description' => 'TaylorMade Golf Stand Bag provides numerous pockets for all your golfing needs',
            'price' => 119.99,
            'stock' => 4,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'name' => 'Toronto Raptors 2019 NBA Finals Champions Stick Flag',
            'code' => 'FLAG.RAP',
            'description' => 'Celebrate the memorable season with the Toronto Raptors 2019 NBA Finals Champions Stick Flag',
            'price' => 2.93,
            'stock' => 16,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'name' => 'Car Window Flag',
            'code' => 'FLAG.CACAR',
            'description' => 'Car Window Flag is constructed of long lasting, durable polyester fabric',
            'price' => 9.19,
            'stock' => 50,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'name' => 'Canadian Pennant Flag',
            'code' => 'FLAG.CAPEN',
            'description' => 'Bold coloured, dispersed dye printed Canadian Pennant Flag',
            'price' => 11.19,
            'stock' => 6,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'name' => 'Outbound Dome Tent, 3-Person',
            'code' => 'OUT.TL.02',
            'description' => 'Outbound Dome Tent features a free-standing, shock-corded fiberglass frame for easy set-up',
            'price' => 44.99,
            'stock' => 134,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'name' => 'Woods A Frame 3-Person',
            'code' => 'OUT.TL.03',
            'description' => 'Woods A-Frame Tent is engineered with ripstop polyester excellent performance and weather protection',
            'price' => 276.99,
            'stock' => 9,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'name' => 'Napier Rooftop Tent',
            'code' => 'OUT.TL.CAR',
            'description' => 'Get up high and stay dry on your outdoor adventure with the Napier Rooftop Tent',
            'price' => 1999.99,
            'stock' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('products')->insert([
            'name' => 'Burner Convertible Propane BBQ',
            'code' => 'BBQ.01',
            'description' => 'Coleman Revolution 3-Burner Convertible Propane BBQ features 680 sq. in. (4.7 sq.ft) of total cooking surface',
            'price' => 599.99,
            'stock' => 0,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
