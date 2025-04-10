<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Petugas;


class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Petugas::all();
        return view( 'petugas', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: 'tpetugas');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $s = new Petugas();
        $s->nama = $request->nama;
        $s->kelamin = $request->kelamin;
        $s->nohp = $request->nohp;
        $s->username = $request->username;
        $s->password = $request->password;
        $s->save();
        return redirect('petugas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = petugas::find($id);
        return view('epetugas', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $s = Petugas::find($id);
        $s->nama = $request->nama;
        $s->kelamin = $request->kelamin;
        $s->nohp = $request->nohp;
        $s->username = $request->username;
        $s->password = $request->password;
        $s->save();
        return redirect('petugas');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus = Petugas::findOrFail($id);
        $hapus->delete();
        return redirect('petugas');
    }

     // Ini untuk Login dan Logout
    public function ceklogin()
    {
        if (session(key:'berhasil_login')) {
            return redirect('barang');
        } else {
            return view(view: 'login');
        }
    }

    public function postlogin(Request $request)
    {
        $username = $request->username;
        $password = $request->password;
        $data = Petugas::where('username', $username)->where('password', $password)->get();
        if (count($data) > 0) {
            session(['berhasil_login' => true]);
            return redirect('barang');
        } else {
            session()->flash('pesan', value: 'Username atau Password Salah');
            return redirect('/');
        }
    }

    public function logout()
    {
        //hapus session
        session()->flush();
        return redirect('/');
    }

}
