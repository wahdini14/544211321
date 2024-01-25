<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('produk')->insert(array(
            ['nama_produk'	=>	'Sabun Lifebuoy',	'harga_jual'	=>	'2000'],
            ['nama_produk'	=>	'Sabum Lux',	'harga_jual'	=>	'4000'],
            ['nama_produk'	=>	'Sabun Cap tangan',	'harga_jual'	=>	'100000'],
            ['nama_produk'	=>	'Sabun mama lemon',	'harga_jual'	=>	'30000']
        ));
    }
}
