<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perpustakaan;

class PerpustakaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perpustakaan=Perpustakaan::all();
        return view('perpustakaan', compact('perpustakaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Perpustakaan::create([
            'petugas' => $request->petugas,
            'anggota' => $request->anggota,
            'peminjaman' => $request->peminjaman,
            'pengembalian' => $request->pengembalian,
            'buku' => $request->buku,
            'rak' => $request->rak
            ]);
            return redirect()->route('perpustakaan.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Perpustakaan $perpustakaan)
    {
        return view('edit', compact('perpustakaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perpustakaan $perpustakaan)
    {
        $perpustakaan->update([
            'petugas' => $request->petugas,
            'anggota' => $request->anggota,
            'peminjaman' => $request->peminjaman,
            'pengembalian' => $request->pengembalian,
            'buku' => $request->buku,
            'rak' => $request->rak
    ]);
    return redirect()->route('perpustakaan.index')->with(['success' => 'Data Berhasil Diubah!']);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perpustakaan $perpustakaan)
    {
        $perpustakaan->delete();

    //redirect to index
    return redirect()->route('perpustakaan.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
