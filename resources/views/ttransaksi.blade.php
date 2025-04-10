@extends('beranda')
@section('konten')
    <form action="{{url('transaksi')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Kode Transkasi</label>
            <input type="text" class="form-control" name="kode" value="{{date('YmdHis')}}">
        </div>
        <div class="form-group">
            <label>Nama Barang</label>
            <select name="barang" id="" class="form-control">
                <option value="">Pilih barang</option>
                @foreach ($barang as $b)
                    <option value="{{$b->id}}">{{$b->nama}} - {{$b->harga}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label>Jumlah</label>
            <input type="number" class="form-control" name="jumlah">
        </div>
        <div class="form-group">
            <label>Bayar</label>
            <input type="number" class="form-control" name="bayar">
        </div>
        <div class="form-group mt-3">
            <input type="submit" value="Bayar" class="btn btn-primary">
        </div>
    </form>
@endsection
