<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table= "cart";
    protected $fillable = [];
    public $timestamps = false;

    public function users(){
        return $this->hasOne(User::class);
    }

    public function product(){
        return $this->belongsTo(Product::class, 'productId');
    }



}
