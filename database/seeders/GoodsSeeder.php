<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoodsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        if (DB::table('goods')->count() == 0) {
            DB::table('goods')->insert([
                [
                    'goods_code' => 'PRD001', 
                    'goods_name' => 'Indomie', 
                    'category' => 'foods', 
                    'goods_price' => 3000, 
                    'qty' => 100
                ], 
                [
                    'goods_code' => 'PRD002', 
                    'goods_name' => 'Pocari Sweat', 
                    'category' => 'drinks', 
                    'goods_price' => 6000, 
                    'qty' => 50
                ], 
                [
                    'goods_code' => 'PRD003',
                    'goods_name' => 'Silverqueen',
                    'category' => 'snacks',
                    'goods_price' => 12500,
                    'qty' => 45
                ], 
                [
                    'goods_code' => 'PRD004',
                    'goods_name' => 'Ultra Milk',
                    'category' => 'drinks',
                    'goods_price' => 4000,
                    'qty' => 75
                ], 
                [
                    'goods_code' => 'PRD005',
                    'goods_name' => 'Chocolatos',
                    'category' => 'snacks',
                    'goods_price' => 7000,
                    'qty' => 50
                ], 
                [
                    'goods_code' => 'PRD006',
                    'goods_name' => 'Tango Wafers',
                    'category' => 'snacks',
                    'goods_price' => 7000,
                    'qty' => 50
                ], 
                [
                    'goods_code' => 'PRD007',
                    'goods_name' => 'La Fonte',
                    'category' => 'foods',
                    'goods_price' => 25000,
                    'qty' => 40
                ], 
                [
                    'goods_code' => 'PRD008',
                    'goods_name' => 'Aqua',
                    'category' => 'drinks',
                    'goods_price' => 3000,
                    'qty' => 90
                ], 
                [
                    'goods_code' => 'PRD009',
                    'goods_name' => 'Dilan',
                    'category' => 'snacks',
                    'goods_price' => 25000,
                    'qty' => 80
                ], 
                [
                    'goods_code' => 'PRD010',
                    'goods_name' => 'Teh Pucuk Harum',
                    'category' => 'drinks',
                    'goods_price' => 5000,
                    'qty' => 36
                ], 
                [
                    'goods_code' => 'PRD011',
                    'goods_name' => 'Royco',
                    'category' => 'seasoning',
                    'goods_price' => 3000,
                    'qty' => 90
                ], 
                [
                    'goods_code' => 'PRD012',
                    'goods_name' => 'Oreo',
                    'category' => 'snacks',
                    'goods_price' => 7000,
                    'qty' => 59
                ], 
                [
                    'goods_code' => 'PRD013',
                    'goods_name' => 'Masako',
                    'category' => 'seasoning',
                    'goods_price' => 3000,
                    'qty' => 90
                ], 
                [
                    'goods_code' => 'PRD014',
                    'goods_name' => 'Fiesta Chicken Nugget',
                    'category' => 'foods',
                    'goods_price' => 20000,
                    'qty' => 75
                ], 
                [
                    'goods_code' => 'PRD015',
                    'goods_name' => 'Golden Farm',
                    'category' => 'foods',
                    'goods_price' => 32000,
                    'qty' => 30
                ], 
                [
                    'goods_code' => 'PRD016',
                    'goods_name' => 'Sari Roti',
                    'category' => 'foods',
                    'goods_price' => 9000,
                    'qty' => 100
                ], 
                [
                    'goods_code' => 'PRD017',
                    'goods_name' => 'Hilo Teen',
                    'category' => 'drinks',
                    'goods_price' => 49000,
                    'qty' => 65
                ], 
                [
                    'goods_code' => 'PRD018',
                    'goods_name' => 'Beng Beng',
                    'category' => 'snacks',
                    'goods_price' => 5000,
                    'qty' => 80
                ], 
                [
                    'goods_code' => 'PRD019',
                    'goods_name' => 'Van Houten',
                    'category' => 'snacks',
                    'goods_price' => 10000,
                    'qty' => 40
                ], 
                [
                    'goods_code' => 'PRD020',
                    'goods_name' => 'Mie Sedaap',
                    'category' => 'foods',
                    'goods_price' => 3000,
                    'qty' => 80
                ]
            ]);
        } else {
            echo "\e[31mTable is not empty, therefore NOT";
        }
    }
}
