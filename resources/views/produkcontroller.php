<?php
namespace
App\Http\Controllers;
use Illuminate\Http\Request;
class ProdukController extends Controller {
    public function index()
    {
        $produk  = 'Aqua  400ML';
        return view(‘produk‘, [‘produk‘ => $produk]); 
    } }