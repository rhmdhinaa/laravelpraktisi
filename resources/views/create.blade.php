<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>CRUD</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-50">
<h2>Add Perpustakaan</h2>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('perpustakaan.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Id:</strong>
<input type="text" name="id" class="form-control" placeholder="id">
@error('Id')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Petugas</strong>
<input type="text" name="petugas" class="form-control" placeholder="petugas">
@error('petugas')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Anggota</strong>
<input type="text" name="anggota" class="form-control" placeholder="anggota">
@error('anggota')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Peminjaman</strong>
<input type="text" name="peminjaman" class="form-control" placeholder="peminjaman">
@error('peminjaman')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Pengembalian</strong>
<input type="text" name="pengembalian" class="form-control" placeholder="pengembalian">
@error('pengembalian')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Buku</strong>
<input type="text" name="buku" class="form-control" placeholder="buku">
@error('buku')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Rak</strong>
<input type="text" name="rak" class="form-control" placeholder="rak">
@error('rak')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<button type="submit" class="btn btn-primary ml-3">Submit</button> ||

<a class="btn btn-secondary" href="{{ route('perpustakaan.index') }}"> Back</a>
</div>
</div>
</form>
</body>
</html>
































<!-- TUGAS CRUD PENJUALAN -->
<!-- <!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>CRUD</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left mb-2">
<h2>Add Produk</h2>
</div>
<div class="pull-right">
<a class="btn btn-primary" href="{{ route('barang.index') }}"> Back</a>
</div>
</div>
</div>
@if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
<form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Id:</strong>
<input type="text" name="id" class="form-control" placeholder="id">
@error('Id')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Nama Barang:</strong>
<input type="text" name="nama_barang" class="form-control" placeholder="nama_barang">
@error('nama_barang')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong>Harga Barang:</strong>
<input type="text" name="harga_barang" class="form-control" placeholder="harga_barang">
@error('harga_barang')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<div class="form-group">
<strong>Jumlah Barang:</strong>
<input type="text" name="jumlah_barang" class="form-control" placeholder="jumlah_barang">
@error('jumlah_barang')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</div>
</div>

<button type="submit" class="btn btn-primary ml-3">Submit</button>
</div>
</form>
</body>
</html> -->