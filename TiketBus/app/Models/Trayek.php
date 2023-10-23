<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trayek extends Model
{
    use HasFactory;
    protected $table = 'trayek';
    protected $fillable =['bus_id','tanggal','asal','tujuan','jam_berangkat','harga'];

    function Bus(){
        return $this->belongsTo(Bus::class, 'bus_id');
    }

}
