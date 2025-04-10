@extends('beranda')
@section('konten')
<a href="{{url('transaksi/create')}}" class="btn btn-primary">Tambah</a>
<table class="table table-condensed">
    <thead align="center">
        <tr>
            <th>No</th>
            <th>Kode Transaksi</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Jumlah Bayar</th>
            <th>Kembalian</th>
        </tr>
    </thead>
<tbody>
    @foreach ($data as $d=>$r )
    <tr>
        <td>{{$d+1}}</td>
        <td>{{$r->kodetrans}}</td>
        <td>{{$r->barang->nama}}</td>
        <td>{{$r->barang->harga}}</td>
        <td>{{$r->jumlah}}</td>
        <td>{{$r->jumlah * $r->barang->harga}}</td>
        <td>{{$r->jumlahbayar}}</td>
        <td>{{$r->jumlahbayar - ($r->jumlah * $r->barang->harga)}}</td>
    </tr>
    @endforeach
</tbody>

</table>
@endsection
