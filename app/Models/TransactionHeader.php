<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    use HasFactory;
    protected $table= "transactionHeader";
    protected $fillable = [];
    public $timestamps = false;

    public function payment(){
        return $this->hasOne(Payment::class);
    }
    public function transactionDetail(){
        return $this->hasMany(transactionDetail::class);
    }
}
