<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table= "product";
    protected $fillable = [];

    public function transactionDetail(){
        return $this->hasOne(transactionDetail::class);
    }
    public function cartDetail(){
        return $this->hasOne(cartDetail::class);
    }
}