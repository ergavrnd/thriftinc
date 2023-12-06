<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Cart;
use App\Models\Kategori_Barang;


class Barang extends Model
{
    use HasFactory, Sluggable;

    protected $guarded=['id'];
    public function KategoriBarang(){
        return $this->belongsTo(Kategori_Barang::class, 'kategoriBarang_id');
    }

    public function Cart(){
        return $this->hasOne(Cart::class, 'Barang_id');
    }

    public function sluggable(): array{
        return [
            'slug' => [
                'source' => 'Nama_jasa'
            ]
        ];
    }
}
