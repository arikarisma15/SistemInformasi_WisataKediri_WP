<?php

namespace App\Http\Controllers;

use App\Models\Skala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class SkalaController extends Controller
{
    public function index(){
        $skala = Skala::all();
    
        return view('Skala',['DtSkala'=>$skala]);
        }
        public function create(){
            $skala = Skala::all();
        
            return view('insert_skala');
            }
    
        public function store(Request $request)
        {
            //dd($request->all());
            $this->validate($request,[
                'id_skala' => 'required',
                'jenis_kriteria' => 'required',
                'bobot_penilaian' => 'required',
            ]);
    
            Skala::create([
                'ID_SkalaPenilaian'=>$request->id_skala,
                'Jenis_Kriteria'=>$request->jenis_kriteria,
                'Bobot_Penilaian'=>$request->bobot_penilaian,
            ]);
            return redirect('/Skala');
        }
    
        public function show($id) //edit
        {
            $skala=Skala::find($id); 
            return view('update_skala',['DtSkala'=>$skala]);
    
            //dd($data);
        }
    
        public function update(Request $request, $id)
        {
         // dd($request->all());
            $this->validate($request,[
              
                'jenis_kriteria' => 'required',
                'bobot_penilaian' => 'required',
            ]);
    
            $skala=Skala::find($id);
            $skala->update([
                
                'Jenis_Kriteria'=>$request->jenis_kriteria,
                'Bobot_Penilaian'=>$request->bobot_penilaian,
            ]);
            return redirect('/Skala');
        }
    
        public function destroy($id)
        {
            $skala=Skala::find($id); 
            $skala->delete();
            return redirect('/Skala');
        }

        public function generatePDF(){
            $data = Skala::all();
            view()->share('data',$data);
            $pdf = PDF::loadview('reportskala');
            
             return $pdf->download('dataSkalaNilai.pdf');
        }
}
