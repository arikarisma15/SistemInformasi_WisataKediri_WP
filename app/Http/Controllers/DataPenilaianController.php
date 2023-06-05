<?php

namespace App\Http\Controllers;

use App\Models\data_penilaian;
use App\Models\data_wisata;
use App\Models\Fasilitas;
use App\Models\Keamanan;
use App\Models\Lokasi;
use App\Models\ObjekAtraksi;
use Illuminate\Http\Request;

class DataPenilaianController extends Controller
{
    public function index()
    {
        // $fasilitas = Fasilitas::all();
        $penilaian = data_penilaian::join('datawisata', 'datawisata.ID_Wisata', '=', 'data_penilaian.ID_Wisata')
            ->join('data_nilailokasi', 'data_nilailokasi.ID_Lokasi', '=', 'data_penilaian.ID_Lokasi')
            ->join('data_nilaifasilitas', 'data_nilaifasilitas.ID_Fasilitas', '=', 'data_penilaian.ID_Fasilitas')
            ->join('data_nilaikeamanan', 'data_nilaikeamanan.ID_Keamanan', '=', 'data_penilaian.ID_Keamanan')
            ->join('data_nilaiobjekatraksi', 'data_nilaiobjekatraksi.ID_ObjekAtraksi', '=', 'data_penilaian.ID_ObjekAtraksi')
            ->select('data_nilailokasi.*', 'data_nilaifasilitas.*', 'data_nilaikeamanan.*', 'data_nilaiobjekatraksi.*', 'datawisata.*', 'data_penilaian.*')->get();
        // echo $penilaian;
        return view('data_penilaian', ['DtPenilaian' => $penilaian]);
    }
    public function create()
    {
        $data['wisata'] = data_wisata::all();
        $data['lokasi'] = Lokasi::all();
        $data['fasilitas'] = Fasilitas::all();
        $data['keamanan'] = Keamanan::all();
        $data['objekatraksi'] = ObjekAtraksi::all();
        return view('insert_data_penilaian', $data);
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'id_penilaian' => 'required',
            'id_wisata' => 'required',
            'id_lokasi' => 'required',
            'id_fasilitas' => 'required',
            'id_keamanan' => 'required',
            'id_objekatraksi' => 'required',
        ]);

        data_penilaian::create([
            'ID_Penilaian' => $request->id_penilaian,
            'ID_Wisata' => $request->id_wisata,
            'ID_Lokasi' => $request->id_lokasi,
            'ID_Fasilitas' => $request->id_fasilitas,
            'ID_Keamanan' => $request->id_keamanan,
            'ID_ObjekAtraksi' => $request->id_objekatraksi,
        ]);
        return redirect('/data_penilaian');
    }

    public function show($id) //edit
    {
        $penilaian = data_penilaian::find($id);
        $data['wisata'] = data_wisata::all();
        $data['lokasi'] = Lokasi::all();
        $data['fasilitas'] = Fasilitas::all();
        $data['keamanan'] = Keamanan::all();
        $data['objekatraksi'] = ObjekAtraksi::all();
        return view('update_data_penilaian', ['DtPenilaian' => $penilaian], $data);

        //dd($data);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $this->validate($request, [
            'id_penilaian' => 'required',
            'id_wisata' => 'required',
            'id_lokasi' => 'required',
            'id_fasilitas' => 'required',
            'id_keamanan' => 'required',
            'id_objekatraksi' => 'required',
        ]);

        $penilaian = data_penilaian::find($id);
        $penilaian->update([
            'ID_Penilaian' => $request->id_penilaian,
            'ID_Wisata' => $request->id_wisata,
            'ID_Lokasi' => $request->id_lokasi,
            'ID_Fasilitas' => $request->id_fasilitas,
            'ID_Keamanan' => $request->id_keamanan,
            'ID_ObjekAtraksi' => $request->id_objekatraksi,
        ]);
        return redirect('/data_penilaian');
    }

    public function destroy($id)
    {
        $penilaian = data_penilaian::find($id);
        $penilaian->delete();
        return redirect('/data_penilaian');
    }
}
