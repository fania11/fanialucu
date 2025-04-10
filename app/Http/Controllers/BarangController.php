<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Barang::all();
        return view( 'barang', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tbarang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $s = new Barang();
        $s->nama = $request->nama;
        $s->jumlah = $request->jumlah;
        $s->harga = $request->harga;
        $s->spesifikasi = $request->spesifikasi;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $filename);
            $s->gambar = $filename;
        } else {
            $s->gambar = '';
        }
        $s->save();
        return redirect('barang');
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
        $data = Barang::find($id);
        return view('ebarang', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $s = Barang::find($id);
        $s->nama = $request->nama;
        $s->jumlah = $request->jumlah;
        $s->harga = $request->harga;
        $s->spesifikasi = $request->spesifikasi;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $filename);
            $s->gambar = $filename;
        } else {
            $s->gambar = '';
        }
        $s->save();
        return redirect('barang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus = Barang::findOrFail($id);
        $hapus->delete();
        return redirect('barang');
    }
}
