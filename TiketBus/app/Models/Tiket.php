<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tiket extends Model
{
    use HasFactory;
    protected $table = 'tiket';
    protected $fillable= ['trayek_id','pelanggan_id','jumlah','total_harga'];

    function Trayek(){
        return $this->belongsTo(Trayek::class, 'trayek_id');
    }

    function Pelanggan(){
        return $this->belongsTo(Pelanggan::class, 'pelanggan_id');
    }
}
