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
<h2> Data Produk</h2>
</div>
<div class="pull-right mb-2">
<a class="btn btn-success" href="{{ route('barang.create') }}"> Tambah Data</a>
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
<th>Nama Produk</th>
<th>Harga</th>
<th>Jumlah</th>
<th width="280px">Action</th>
</tr>
@foreach ($produk as $p)
<tr>
<td>{{ $p->id }}</td>
<td>{{ $p->nama_barang }}</td>
<td>{{ $p->harga_barang}}</td>
<td>{{ $p->jumlah_barang }}</td>
<td>
<form action="{{ route('barang.destroy',$p->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('barang.edit',$p->id) }}">Edit</a>
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
































































<!-- <!DOCTYPE html>
<html>
<head>
<title>CONTROL STRUKTUR PADA BLADE TEMPLATE</title>
</head>
<body>
@if (count($produk)==1)
    <p>Jumlah Produk adalah satu</p>
@elseif(count($produk)>1)
    <p><b>Perulangan dengan FOR</b></p>
@for ($i = 0; $i < count($produk); $i++)
    <p>{{ 'No :'.$i.' Nama Produk :'.$produk[$i] }}</p>
@endfor
<hr>

<p><b>Perulangan dengan FOREACH</b></p>

@foreach ($produk as $x => $v)
    <p>{{ 'No :'.$x.' Nama Produk :'.$v }}</p>
@endforeach
<hr>

    <p><b>Perulangan dengan WHILE</b></p>
@php
$no = 1;
@endphp
@while ($no<=5)
<p>ini adalah perulangan ke {{ $no }}</p>
@php
$no++;
@endphp
@endwhile
@else
    <p>Tidak Ada Data Produk</p>
@endif
</body>
</html> -->