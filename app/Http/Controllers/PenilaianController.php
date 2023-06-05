<?php

namespace App\Http\Controllers;


use App\Models\Penilaian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;


class PenilaianController extends Controller
{
    public function index()
    {
        $data_penilaian = Penilaian::all();

        return view('KetNilai', ['DtNilai' => $data_penilaian]);
    }
    public function create()
    {
        $data_penilaian = Penilaian::all();

        return view('insert_ketnilai');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'id_keterangan' => 'required',
            'keterangan_nilai' => 'required',
            'range_nilai' => 'required',
            'bobot_nilai' => 'required',
        ]);
        Penilaian::create([
            'ID_Keterangan' => $request->id_keterangan,
            'Keterangan_Nilai' => $request->keterangan_nilai,
            'Range_Nilai' => $request->range_nilai,
            'Bobot_Nilai' => $request->bobot_nilai,
        ]);
        return redirect('/KetNilai');
    }

    public function show($id) //edit
    {
        $data_penilaian = Penilaian::find($id);
        return view('update_ketNilai', ['DtNilai' => $data_penilaian]);

        //dd($data);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $this->validate($request, [
            'keterangan_nilai' => 'required',
            'range_nilai' => 'required',
            'bobot_nilai' => 'required',

        ]);

        $data_penilaian = Penilaian::find($id);
        $data_penilaian->update([
            'Keterangan_Nilai' => $request->keterangan_nilai,
            'Range_Nilai' => $request->range_nilai,
            'Bobot_Nilai' => $request->bobot_nilai,
        ]);
        return redirect('/KetNilai');
    }

    public function destroy($id)
    {
        $data_penilaian = Penilaian::find($id);
        $data_penilaian->delete();
        return redirect('/KetNilai');
    }

    public function generatePDF(){
        $data = Penilaian::all();
        view()->share('data',$data);
        $pdf = PDF::loadview('reportKeterangan');
        
         return $pdf->download('dataKeterangan.pdf');
    }
}
