@extends('beranda')
@section('konten')
<a href="{{url('barang/create')}}" class="btn btn-primary">Tambah</a>
<table class="table table-condensed">
    <thead align="center">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
    </thead>
<tbody>
    @foreach ($data as $r)
    <tr>
        <td>{{$r->id}}</td>
        <td>{{$r->nama}}</td>
        <td>{{$r->jumlah}}</td>
        <td>{{$r->harga}}</td>
        <td>
            <img src="{{asset('img/'.$r->gambar)}}" alt="" height="150" width="150">
        </td>
        <td>{{$r->aksi}}</td>
        <td width="20%">

            <!-- Tombol Hapus -->
            <form onsubmit="return confirm('Apakah anda Yakin ?')" action="{{url('barang/'.$r->id)}}" method="POST">
                <!-- Tombol Edit -->
                <a href="{{url('barang/'.$r->id.'/edit')}}" class="btn btn-primary btn-sm">Edit</a>
                @method('DELETE')
                @csrf()
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </td>
    </tr>
</tbody>
@endforeach
</table>
@endsection
