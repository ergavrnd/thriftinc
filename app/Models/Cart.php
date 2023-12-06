<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;
use App\Models\User;


class Cart extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    public function Barang(){
        return $this->belongsTo(Barang::class, 'Barang_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
