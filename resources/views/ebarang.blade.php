@extends('beranda')
@section('konten')
<form action="{{url('barang/'.$data->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" name="nama" id="" class="form-control" value="{{$data->nama}}">
    </div>

    <div class="form-group">
        <label>Jumlah</label>
        <input type="text" name="jumlah" id="" class="form-control" value="{{$data->jumlah}}">
    </div>

    <div class="form-group">
        <label>Harga</label>
        <input type="text" name="harga" id="" class="form-control" value="{{$data->harga}}">
    </div>

    <div class="form-group">
        <label>Spesifikasi</label>
        <input type="text" name="spesifikasi" id="" class="form-control" value="{{$data->spesifikasi}}">
    </div>

    <div class="form-group">
        <label>Gambar</label>
        <input type="file" name="gambar" id="" class="form-control">
    </div>

    <div class="form-group mt-2">
        <input type="submit" name="simpan" value="simpan" id="" class="btn btn-primary">
    </div>
</form>
@endsection
