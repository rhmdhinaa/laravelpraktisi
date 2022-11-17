<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class penjualan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert(array(['nama_barang' => 'Meja', 'harga_barang' => '450000', 'jumlah_barang'
        => '1',],['nama_barang' => 'Kursi', 'harga_barang' => '350000', 'jumlah_barang' => '4',] ));
    }
}
