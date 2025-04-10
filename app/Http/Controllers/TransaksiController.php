<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Barang;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Transaksi::all();
        return view( 'transaksi', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        return view('ttransaksi',compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $s = new Transaksi();
        $s->tanggal = date("Y-m-d");
        $s->kodepetugas = '1';
        $s->idbarang = $request->barang;
        $s->jumlah = $request->jumlah;

        // Cari barang dulu
        $brg = Barang::find($request->barang);
        $harga = $brg->harga;
        $s->total = $request->jumlah * $harga;
        $s->jumlahbayar = $request->bayar;
        $s->kodetrans = $request->kode;
        $s->save();
        return redirect('transaksi');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $hapus = Transaksi::findOrFail($id);
        $hapus->delete();
        return redirect(to: 'transaksi');
    }

    public function ttransaksi(){
        return view('ttransaksi');
    }
}
