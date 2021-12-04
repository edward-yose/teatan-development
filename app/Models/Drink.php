<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drink extends Model
{
    use HasFactory;
    protected $table= "drink";
    protected $fillable = [];

    public function transactionDetail(){
        return $this->hasOne(transactionDetail::class);
    }
    public function cartDetail(){
        return $this->hasOne(cartDetail::class);
    }
}
