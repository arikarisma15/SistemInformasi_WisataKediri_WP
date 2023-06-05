<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;
    protected $table = 'data_nilaifasilitas';
    protected $primaryKey='ID_Fasilitas'; 
    protected $fillable = ['ID_Fasilitas', 'ID_Wisata', 'Nilai_KriteriaFasilitas']; //kolom ditabel 
    public $incrementing=false; //default e true 
    public $timestamps=false; //default timestamps migrate ""Created at updated at
}

