<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'datawisata';
    protected $primaryKey='ID_Wisata'; 
    protected $fillable = ['ID_Wisata','Nama_Wisata','Lokasi','Harga_Tiket']; //kolom ditabel 
    public $incrementing=false; //default e true 
    public $timestamps=false; //default timestamps migrate ""Created at updated at
}
