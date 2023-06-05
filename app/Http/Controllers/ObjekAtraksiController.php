<?php

namespace App\Http\Controllers;

use App\Models\data_wisata;
use App\Models\ObjekAtraksi;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ObjekAtraksiController extends Controller
{
    public function index()
    {
        $dataOA = ObjekAtraksi::all();
        $dataOA = ObjekAtraksi::join('datawisata', 'datawisata.ID_Wisata', '=', 'data_nilaiobjekatraksi.ID_Wisata')
            ->select('data_nilaiobjekatraksi.*', 'datawisata.*')->get();
        return view('objekatraksi', ['DtObjek' => $dataOA]);
    }
    public function create()
    {
        $data['wisata'] = data_wisata::all();
        return view('insert_objekatraksi', $data);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'id_objekatraksi' => 'required',
            'id_wisata' => 'required',
            'nilai_kriteriaobjekatraksi' => 'required',
        ]);

        ObjekAtraksi::create([
            'ID_ObjekAtraksi' => $request->id_objekatraksi,
            'ID_Wisata' => $request->id_wisata,
            'Nilai_KriteriaObjekAtraksi' => $request->nilai_kriteriaobjekatraksi,
        ]);
        return redirect('/objekatraksi');
    }

    public function show($id) //edit
    {
        $dataOA = ObjekAtraksi::find($id);
        $data['wisata'] = data_wisata::all();
        return view('update_objekatraksi', ['DtObjek' => $dataOA], $data);

        //dd($data);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $this->validate($request, [

            'id_wisata' => 'required',
            'nilai_kriteriaobjekatraksi' => 'required',
        ]);

        $dataOA = ObjekAtraksi::find($id);
        $dataOA->update([

            'ID_Wisata' => $request->id_wisata,
            'Nilai_KriteriaObjekAtraksi' => $request->nilai_kriteriaobjekatraksi,
        ]);
        return redirect('/objekatraksi');
    }

    public function destroy($id)
    {
        $dataOA = ObjekAtraksi::find($id);
        $dataOA->delete();
        return redirect('/objekatraksi');
    }


    public function generatePDF(){
        $objek= ObjekAtraksi::join('datawisata', 'datawisata.ID_Wisata', '=', 'data_nilaiobjekatraksi.ID_Wisata')
        ->select('data_nilaiobjekatraksi.*', 'datawisata.*')->get();
    $pdf = Pdf::loadView('reportobjek', ['Dtobjek' => $objek])->setPaper('a4', 'landscape');

    return $pdf->download('dataobjek.pdf');
    }
}
