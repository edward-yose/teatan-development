<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table= "cart";
    protected $fillable = [];

    public function client(){
        return $this->hasOne(Client::class);
    }
    public function cartDetail(){
        return $this->hasMany(cartDetail::class);
    }
}
