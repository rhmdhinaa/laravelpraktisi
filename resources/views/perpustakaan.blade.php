<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Contoh tutorial CRUD Laravel 9</title>
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<div class="container mt-2">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2> Data Perpustakaan</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('perpustakaan.create') }}"> Tambah Data</a>
</div>
</div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
<p>{{ $message }}</p>
</div>
@endif
<table class="table table-bordered">
<tr>
<th>Id</th>
<th>Petugas</th>
<th>Anggota</th>
<th>Peminjaman</th>
<th>Pengembalian</th>
<th>Buku</th>
<th>Rak</th>
<th width="280px">Action</th>
</tr>
@foreach ($perpustakaan as $p)
<tr>
<td>{{ $p->id }}</td>
<td>{{ $p->petugas }}</td>
<td>{{ $p->anggota}}</td>
<td>{{ $p->peminjaman }}</td>
<td>{{ $p->pengembalian }}</td>
<td>{{ $p->buku }}</td>
<td>{{ $p->rak }}</td>
<td>
<form action="{{ route('perpustakaan.destroy',$p->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('perpustakaan.edit',$p->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>
</body>
</html>






















































