<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keamanan extends Model
{
    use HasFactory;
    protected $table = 'data_nilaikeamanan';
    protected $primaryKey='ID_Keamanan'; 
    protected $fillable = ['ID_Keamanan', 'ID_Wisata', 'Nilai_KriteriaKeamanan']; //kolom ditabel 
    public $incrementing=false; //default e true 
    public $timestamps=false; //default timestamps migrate ""Created at updated at
}
