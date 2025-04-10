<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = "transaksis";

    public function barang(){
        return $this->hasOne(Barang::class, 'id','idbarang');
    }
}
