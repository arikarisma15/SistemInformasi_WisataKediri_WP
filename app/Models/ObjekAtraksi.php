<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjekAtraksi extends Model
{
    use HasFactory;
    protected $table = 'data_nilaiobjekatraksi';
    protected $primaryKey='ID_ObjekAtraksi'; 
    protected $fillable = ['ID_ObjekAtraksi', 'ID_Wisata', 'Nilai_KriteriaObjekAtraksi']; //kolom ditabel 
    public $incrementing=false; //default e true 
    public $timestamps=false; //default timestamps migrate ""Created at updated at
}
