<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    use HasFactory;
    protected $table = 'data_nilailokasi';
    protected $primaryKey='ID_Lokasi'; 
    protected $fillable = ['ID_Lokasi', 'ID_Wisata', 'Nilai_KriteriaLokasi']; //kolom ditabel 
    public $incrementing=false; //default e true 
    public $timestamps=false; //default timestamps migrate ""Created at updated at
}
