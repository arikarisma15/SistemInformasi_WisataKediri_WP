<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_penilaian extends Model
{
    use HasFactory;
    protected $table = 'data_penilaian';
    protected $primaryKey = 'ID_Penilaian';
    protected $fillable = ['ID_Penilaian', 'ID_Wisata', 'ID_Lokasi', 'ID_Fasilitas', 'ID_Keamanan', 'ID_ObjekAtraksi'];
    public $incrementing = false; //default e true
    public $timestamps = false; //default timestamps migrate ""Created at updated at
}
