@extends('beranda')
@section('konten')
<form action="{{url('petugas/'.$data->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" id="" class="form-control" value="{{$data->nama}}">
    </div>

    <div class="form-group">
        <label>Kelamin</label>
        <select name="kelamin" id="" class="form-control">
            <option value="L" {{$data->kelamin == "L" ? 'selected' : ''}}>L</option>
            <option value="P" {{$data->kelamin == "P" ? 'selected' : ''}}>P</option>
        </select>
    </div>

    <div class="form-group">
        <label>No Hp</label>
        <input type="text" name="nohp" id="" class="form-control" value="{{$data->nohp}}">
    </div>

    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" id="" class="form-control" value="{{$data->username}}">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" id="" class="form-control" value="{{$data->password}}">
    </div>

    <div class="form-group mt-2">
        <input type="submit" name="simpan" value="Simpan" id="" class="btn btn-primary">
    </div>
</form>
@endsection
