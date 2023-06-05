<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skala extends Model
{
    use HasFactory;
    protected $table = 'skala_penilaian';
    protected $primaryKey='ID_SkalaPenilaian'; 
    protected $fillable = ['ID_SkalaPenilaian', 'Jenis_Kriteria', 'Bobot_Penilaian']; //kolom ditabel 
    public $incrementing=false; //default e true 
    public $timestamps=false; //default timestamps migrate ""Created at updated at
}
