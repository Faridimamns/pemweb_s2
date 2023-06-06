<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\KategoriProduk;
// use db;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProdukConroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = DB::table('produk')
        ->join('kategori_produk', 'produk.kategori_produk_id', '=',
        'kategori_produk.id')
        ->select('produk.*', 'kategori_produk.nama as nama_kategori')
        ->get();
        return view('admin.produk.index', compact('produk'));
        // compact sebagai mgnumpulkan membuat array yang ingin di panggil dalam view
    }

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
