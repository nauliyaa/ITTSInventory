<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    public function barang(){
        return $this->belongsTo(Form::class,'barang_peminjam') ;
    }
}
