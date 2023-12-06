<?php

namespace App\Models;

use App\Models\Cart;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $guarded=["id"];

    public function Cart(){
        return $this->hasMany(Cart::class, 'user_id');
    }
}
