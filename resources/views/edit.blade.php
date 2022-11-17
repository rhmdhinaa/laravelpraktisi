<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Edit Data Post - Perpustakaan</title>
 <link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">
 <div class="container mt-5 mb-5">
 <div class="row">
 <div class="col-md-12">
 <div class="card border-0 shadow rounded">
 <div class="card-body">

 <form action="{{ route('perpustakaan.update', $perpustakaan->id) }}" method="POST"
enctype="multipart/form-data">
 @csrf
 @method('PUT')

 <div class="form-group">
 <label class="font-weight-bold">Id</label>
 <input type="text" class="form-control" name="id" value="{{
old('id', $perpustakaan->id) }}">
 </div>

 <div class="form-group">
 <label class="font-weight-bold">Petugas</label>
 <input type="text" class="form-control" name="petugas" value="{{
old('petugas', $perpustakaan->petugas) }}">
 </div>

 <div class="form-group">
 <label class="font-weight-bold">Anggota</label>
 <input name="anggota" type="text" class="form-control" placeholder="Masukkan Nama Anggota" 
 value="{{ old('anggota', $perpustakaan->anggota) }}">
 </div>

 
 <div class="form-group">
 <label class="font-weight-bold">Peminjaman</label>
 <input name="peminjaman" type="text" class="form-control" placeholder="Masukkan
Tanggal Peminjaman" value="{{ old('peminjaman', $perpustakaan->peminjaman) }}">
 </div>

 <div class="form-group">
 <label class="font-weight-bold">Pengembalian</label>
 <input name="pengembalian" type="text" class="form-control" placeholder="Masukkan
Tanggal Pengembalian" value="{{ old('pengembalian', $perpustakaan->pengembalian) }}">
 </div>

 <div class="form-group">
 <label class="font-weight-bold">Buku</label>
 <input name="buku" type="text" class="form-control" placeholder="Masukkan
Judul Buku" value="{{ old('buku', $perpustakaan->buku) }}">
 </div>

 <div class="form-group">
 <label class="font-weight-bold">Rak</label>
 <input name="rak" type="text" class="form-control" placeholder="Masukkan
Nomor Rak" value="{{ old('rak', $perpustakaan->rak) }}">
 </div>

 <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
 <button type="reset" class="btn btn-md btn-warning">RESET</button>
 </form>
 </div>
 </div>
 </div>
 </div>
 </div>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>








































