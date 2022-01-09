<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
            'name'=>'mi phone',
            'price'=>'5000',
            'category'=>'mobile',
            'description'=>'6G Ram and 64G Rom',
            'gallary'=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
        ],
        [
            'name'=>'samsung phone',
            'price'=>'9000',
            'category'=>'mobile',
            'description'=>'6G Ram and 128G Rom',
            'gallary'=>"https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg"
        ],
        [
            'name'=>'mi phone',
            'price'=>'3000',
            'category'=>'mobile',
            'description'=>'6G Ram and 128G Rom',
            'gallary'=>"https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png"
        ]
    
        ]);
    }
}
