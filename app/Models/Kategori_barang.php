<?php

namespace App\Models;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori_barang extends Model
{
    use HasFactory, Sluggable;
    protected $guarded=['id'];
    public function Barang(){
        return $this->hasMany(Barang::class, 'kategoriBarang_id');
    }

    public function sluggable(): array{
        return [
            'slug' => [
                'source' => 'Nama_kategori'
            ]
        ];
    }
}
