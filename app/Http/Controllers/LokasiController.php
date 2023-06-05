<?php

namespace App\Http\Controllers;

use App\Models\Lokasi;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\data_wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class LokasiController extends Controller
{
    public function index()
    {
        $lokasi = Lokasi::join('datawisata', 'datawisata.ID_Wisata', '=', 'data_nilailokasi.ID_Wisata')
            ->select('data_nilailokasi.*', 'datawisata.*')->get();
        return view('lokasi', ['DtLokasi' => $lokasi]);
    }
    public function create()
    {
        $data['wisata'] = data_wisata::all();
        return view('insert_lokasi', $data);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'id_lokasi' => 'required',
            'id_wisata' => 'required',
            'nilai_kriterialokasi' => 'required',
        ]);

        Lokasi::create([
            'ID_Lokasi' => $request->id_lokasi,
            'ID_Wisata' => $request->id_wisata,
            'Nilai_KriteriaLokasi' => $request->nilai_kriterialokasi,
        ]);
        return redirect('/lokasi');
    }

    public function show($id) //edit
    {
        $lokasi = Lokasi::find($id);
        $data['wisata'] = data_wisata::all();
        return view('update_lokasi', ['DtLokasi' => $lokasi], $data);

        //dd($data);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $this->validate($request, [
            'id_wisata' => 'required',
            'nilai_kriterialokasi' => 'required',
        ]);

        $lokasi = Lokasi::find($id);
        $lokasi->update([
            'ID_Wisata' => $request->id_wisata,
            'Nilai_KriteriaLokasi' => $request->nilai_kriterialokasi,
        ]);
        return redirect('/lokasi');
    }

    public function destroy($id)
    {
        $lokasi = Lokasi::find($id)->delete();
        //$lokasi->delete();
        return redirect('/lokasi');
    }

    public function generatePDF(){
        $lokasi = Lokasi::join('datawisata', 'datawisata.ID_Wisata', '=', 'data_nilailokasi.ID_Wisata')
        ->select('data_nilailokasi.*', 'datawisata.*')->get();
    $pdf = Pdf::loadView('reportlokasi', ['DtLokasi' => $lokasi])->setPaper('a4', 'landscape');

    return $pdf->download('datalokasi.pdf');
    }

    



}

