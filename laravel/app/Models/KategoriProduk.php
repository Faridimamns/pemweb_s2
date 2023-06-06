<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriProduk extends Model
{
    use HasFactory;
    //hubungkan kategori produk

    protected $table = 'kategori_produk';
    protected $fillable = [
        'nama'
    ];
    public function produk(){
        return $this->hasMany(Produk::class);
    }
    //hasmany untuk menerima relasi one to many dengan table produk
}
