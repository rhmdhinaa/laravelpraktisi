<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class perpustakaan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perpustakaan')->insert(array([
            'petugas' => 'Salsa Cantika',
            'anggota' => 'Dhina Rohmawati',
            'peminjaman' => 'Rabu, 26 Oktober 2022',
            'pengembalian' => 'Selasa, 1 November 2022',
            'buku' => 'Ikhlas Paling Serius',
            'rak' => '10',
        
        ],

        [   
            'petugas' => 'Salsa Cantika',
            'anggota' => 'Mega Dwi Wijayanti',
            'peminjaman' => 'Selasa, 25 Oktober 2022',
            'pengembalian' => 'Senin, 31 Oktober 2022',
            'buku' => 'Sebuah Seni untuk Bersikap Bodo Amat',
            'rak' => '8',
        ] 
        )
    );
    }
}
