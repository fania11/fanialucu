@extends('beranda')
@section('konten')
<a href="{{url('petugas/create')}}" class="btn btn-primary">Tambah</a>
<table class="table table-condensed">
    <thead align="center">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelamin</th>
            <th>No hp</th>
            <th>Username</th>
            <th>Aksi</th>
        </tr>
    </thead>
<tbody>
    @foreach ($data as $r)
    <tr>
        <td>{{$r->id}}</td>
        <td>{{$r->nama}}</td>
        <td>{{$r->kelamin}}</td>
        <td>{{$r->nohp}}</td>
        <td>{{$r->username}}</td>
        <td>{{$r->aksi}}</td>
        <td width="20%">

            <!-- Tombol Hapus -->
            <form onsubmit="return confirm('Apakah anda Yakin ?')" action="{{url('petugas/'.$r->id)}}" method="POST">
                <!-- Tombol Edit -->
                <a href="{{url('petugas/'.$r->id.'/edit')}}" class="btn btn-primary btn-sm">Edit</a>
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
