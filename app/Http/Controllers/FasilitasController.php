<?php

namespace App\Http\Controllers;

use App\Models\data_wisata;
use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class FasilitasController extends Controller
{
    public function index()
    {
        // $fasilitas = Fasilitas::all();
        $fasilitas = Fasilitas::join('datawisata', 'datawisata.ID_Wisata', '=', 'data_nilaifasilitas.ID_Wisata')
            ->select('data_nilaifasilitas.*', 'datawisata.*')->get();
        return view('fasilitas', ['DtFasilitas' => $fasilitas]);
    }
    public function create()
    {
        $data['wisata'] = data_wisata::all();
        return view('insert_fasilitas', $data);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'id_fasilitas' => 'required',
            'id_wisata' => 'required',
            'nilai_kriteriafasilitas' => 'required',
        ]);

        Fasilitas::create([
            'ID_Fasilitas' => $request->id_fasilitas,
            'ID_Wisata' => $request->id_wisata,
            'Nilai_KriteriaFasilitas' => $request->nilai_kriteriafasilitas,
        ]);
        return redirect('/fasilitas');
    }

    public function show($id) //edit
    {
        $fasilitas = Fasilitas::find($id);
        $data['wisata'] = data_wisata::all();
        return view('update_fasilitas', ['DtFasilitas' => $fasilitas], $data);

        //dd($data);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $this->validate($request, [

            'id_wisata' => 'required',
            'nilai_kriteriafasilitas' => 'required',
        ]);

        $fasilitas = Fasilitas::find($id);
        $fasilitas->update([

            'ID_Wisata' => $request->id_wisata,
            'Nilai_KriteriaFasilitas' => $request->nilai_kriteriafasilitas,
        ]);
        return redirect('/fasilitas');
    }

    public function destroy($id)
    {
        $fasilitas = Fasilitas::find($id);
        $fasilitas->delete();
        return redirect('/fasilitas');
    }

    public function generatePDF(){
        $fasilitas=Fasilitas::join('datawisata', 'datawisata.ID_Wisata', '=', 'data_nilaifasilitas.ID_Wisata')
        ->select('data_nilaifasilitas.*', 'datawisata.*')->get();
    $pdf = Pdf::loadView('reportfasilitas', ['Dtfasilitas' => $fasilitas])->setPaper('a4', 'landscape');

    return $pdf->download('datafasilitas.pdf');
    }

    
}



