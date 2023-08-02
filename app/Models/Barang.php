<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // public function satuan()
    // {
    //     return $this->belongsTo(Satuan::class);
    // }
    public function form(){
        return $this->hasMany(Barang::class, 'barang_peminjam');
    } 
}