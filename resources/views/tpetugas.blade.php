@extends('beranda')
@section('konten')
<form action="{{url('petugas')}}" method="post">
    @csrf
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" id="" class="form-control">
    </div>

    <div class="form-group">
        <label>Kelamin</label>
        <select name="kelamin" id="" class="form-control">
            <option value="L">L</option>
            <option value="P">P</option>
        </select>
    </div>

    <div class="form-group">
        <label>No Hp</label>
        <input type="text" name="nohp" id="" class="form-control">
    </div>

    <div class="form-group">
        <label>Username</label>
        <input type="text" name="username" id="" class="form-control">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="text" name="password" id="" class="form-control">
    </div>

    <div class="form-group mt-2">
        <input type="submit" name="simpan" value="simpan" id="" class="btn btn-primary">
    </div>
</form>
@endsection
