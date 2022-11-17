<?php
namespace  App\Http\Controllers; 
use  Illuminate\Http\Request; 
use App\Models\produk;


class kategoriController extends Controller { 

public function insert_eloquent()
{
    Produk::create(['nama_barang' => 'buku', 'harga_barang' => 100000, 'jumlah_barang' => '3'
]);

}

public  function  update_eloquent() 
    { 
    Produk::where('id',1) ->update(['harga_barang'  =>  '4000000', 
    ]); 
    }
// return view ('produk',['produk' => $produk]);

}
