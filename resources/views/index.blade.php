<table border=1>
    <th>id</th>
    <th>nama_barang</th>
    <th>harga_barang</th> 
    <th>jumlah_barang</th>

    @foreach($produk as $p)
    <tr><td>{{ $p->id }}</td>
    <td>{{ $p->nama_barang }}</td>
    <td>{{ $p->harga_barang}}</td>
    <td>{{ $p->jumlah_barang }}</td></tr>

    @endforeach 

    </table>        