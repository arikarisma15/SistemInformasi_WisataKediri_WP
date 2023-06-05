<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penilaian extends Model
{
    use HasFactory;
    protected $table = 'keterangan_nilai';
    protected $primaryKey='ID_Keterangan'; 
    protected $fillable = ['ID_Keterangan', 'Keterangan_Nilai', 'Range_Nilai', 'Bobot_Nilai']; //kolom ditabel 
    public $incrementing=false; //default e true 
    public $timestamps=false; //default timestamps migrate ""Created at updated at
}
