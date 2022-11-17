<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request; 
use DB;
use App\Models\produk;
class ProdukController extends Controller 
{ 
        public function index() {
            $produk = ['Aqua 115 ML','Minuman Bersoda','Buku Sejarah','Mouse','CPU'];
            return view('produk', ['produk' => $produk]);
        }
        public  function  show() 
        { 
            $produk = ['Aqua 115 ML','Minuman Bersoda','Buku Sejarah','Mouse','CPU'];
            return view('show', ['produk' => $produk]); 
        }
        public function tampil(){
            $produk = DB::table('produk')->get();
            return view('tampil',['produk' => $produk]);
        }
        public function show_eloquent() {
            $produk = produk::all();
            return view('tampil', ['produk' => $produk]);
        }
        public function insert_eloquent() {
        produk::create(['nama_barang' => 'kalkulator', 'harga_barang' => 50000, 'jumlah_barang' => '4'
        
        ]);
        }
        public  function  update_eloquent() 
        { 
        produk::where('id',2) ->update(['harga_barang'  =>  '300000', 
            ]); 
            }

}






