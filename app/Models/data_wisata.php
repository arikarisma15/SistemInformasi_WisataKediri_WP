<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_wisata extends Model
{
    //use HasFactory;

    protected $table='datawisata';
    protected $primaryKey = 'No';
    protected $fillable = ['ID_Wista', 'Nama_Wista', 'Lokasi', 'Harga_Tiket'];
}
