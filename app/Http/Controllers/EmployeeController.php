<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\data_wista;
use App\Models\data_wisata;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;



class EmployeeController extends Controller
{
    public function index()
    {
        $data = Employee::all();

        return view('datawisata', ['data' => $data]);
    }
    public function create()
    {
        $data = Employee::all();

        return view('insert_datawisata');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'id_wisata' => 'required',
            'nama_wisata' => 'required',
            'lokasi' => 'required',
            'harga' => 'required',
        ]);
        Employee::create([
            'ID_Wisata' => $request->id_wisata,
            'Nama_Wisata' => $request->nama_wisata,
            'Lokasi' => $request->lokasi,
            'Harga_Tiket' => $request->harga,
        ]);
        return redirect('/datawisata');
    }

    public function show($id) //edit
    {
        $data = Employee::find($id);
        return view('update_datawisata', ['data' => $data]);

        //dd($data);
    }

    public function update(Request $request, $id)
    {
        //dd($request->all());
        $this->validate($request, [
            'nama_wisata' => 'required',
            'lokasi' => 'required',
            'harga' => 'required',
        ]);

        $data = Employee::find($id);
        $data->update([
            'Nama_Wisata' => $request->nama_wisata,
            'Lokasi' => $request->lokasi,
            'Harga_Tiket' => $request->harga,
        ]);
        return redirect('/datawisata');
    }

    public function destroy($id)
    {


        $data = Employee::find($id)->delete();
        //$data->delete();
        return redirect('/datawisata');
    }


   
    public function generatePDF()
    {
       
        $data = Employee::all();
        view()->share('data',$data);
        $pdf = PDF::loadview('reportdatawisata');
        
         return $pdf->download('datawisata.pdf');
        
        //return ('berhasil');
    }



}
