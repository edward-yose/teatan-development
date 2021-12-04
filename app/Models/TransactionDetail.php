<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    protected $table= "transactionDetail";
    protected $fillable = [];

    public function drink(){
        return $this->hasmany(Drink::class);
    }
    public function transactionHeader(){
        return $this->hasOne(transactionHeader::class);
    }
}
