<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class pesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = DB::table('pesanan')
        ->join('produk', 'pesanan.produk_id', '=',
        'produk.id')
        ->select('pesanan.*', 'produk.nama as nama_produk')
        ->get();
        return view('admin.pesanan.index', compact('pesanan'));
    }
    // $produk = DB::table('produk')
    //     ->join('kategori_produk', 'produk.kategori_produk_id', '=',
    //     'kategori_produk.id')
    //     ->select('produk.*', 'kategori_produk.nama as nama_kategori')
    //     ->get();
        // return view('admin.produk.index', compact('produk'));

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
