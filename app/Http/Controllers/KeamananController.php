<?php

namespace App\Http\Controllers;

use App\Models\Keamanan;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\data_wisata;
use Illuminate\Http\Request;


class KeamananController extends Controller
{
    public function index()
    {
        // $dataK = Keamanan::all();
        $dataK = Keamanan::join('datawisata', 'datawisata.ID_Wisata', '=', 'data_nilaikeamanan.ID_Wisata')
            ->select('data_nilaikeamanan.*', 'datawisata.*')->get();
        return view('keamanan', ['DtKeamanan' => $dataK]);
    }
    public function create()
    {
        $data['wisata'] = data_wisata::all();
        return view('insert_keamanan', $data);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'id_keamanan' => 'required',
            'id_wisata' => 'required',
            'nilai_kriteriakeamanan' => 'required',
        ]);

        Keamanan::create([
            'ID_Keamanan' => $request->id_keamanan,
            'ID_Wisata' => $request->id_wisata,
            'Nilai_KriteriaKeamanan' => $request->nilai_kriteriakeamanan,
        ]);
        return redirect('/keamanan');
    }

    public function show($id) //edit
    {
        $dataK = Keamanan::find($id);
        $data['wisata'] = data_wisata::all();
        return view('update_keamanan', ['DtKeamanan' => $dataK], $data);

        //dd($data);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request, [

            'id_wisata' => 'required',
            'nilai_kriteriakeamanan' => 'required',
        ]);

        $dataK = Keamanan::find($id);
        $dataK->update([

            'ID_Wisata' => $request->id_wisata,
            'Nilai_KriteriaKeamanan' => $request->nilai_kriteriakeamanan,
        ]);
        return redirect('/keamanan');
    }

    public function destroy($id)
    {
        $dataK = Keamanan::find($id);
        $dataK->delete();
        return redirect('/keamanan');
    }

   

    public function generatePDF()
    {
        $dataK = Keamanan::join('datawisata', 'datawisata.ID_Wisata', '=', 'data_nilaikeamanan.ID_Wisata')
            ->select('data_nilaikeamanan.*', 'datawisata.*')->get();
    
        $pdf = Pdf::loadView('reportkeamanan', ['DtKeamanan' => $dataK])->setPaper('a4', 'landscape');
    
        return $pdf->download('report_keamanan.pdf');



        // $data = Keamanan::all();
        // view()->share('data',$data);
        // $pdf = PDF::loadview('reportdatawisata');
        
        //  return $pdf->download('datawisata.pdf');
        
        //return ('berhasil');
    }

    
    

}
