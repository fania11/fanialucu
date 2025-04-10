@extends('beranda')
@section('konten')
<form action="{{url('barang')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Nama Barang</label>
        <input type="text" name="nama" id="" class="form-control">
    </div>

    <div class="form-group">
        <label>Jumlah</label>
        <input type="text" name="jumlah" id="" class="form-control">
    </div>

    <div class="form-group">
        <label>Harga</label>
        <input type="text" name="harga" id="" class="form-control">
    </div>

    <div class="form-group">
        <label>Spesifikasi</label>
        <input type="text" name="spesifikasi" id="" class="form-control">
    </div>

    <div class="form-group">
        <label>Gambar</label>
        <input type="file" name="gambar" id="" class="form-control">
    </div>

    <div class="form-group mt-2">
        <input type="submit" name="simpan" value="Simpan" id="" class="btn btn-primary">
    </div>
</form>
@endsection
