<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;
    protected $table= "cartDetail";
    protected $fillable = [];

    public function cart(){
        return $this->hasOne(Cart::class);
    }
    public function drink(){
        return $this->hasMany(Drink::class);
    }
}
