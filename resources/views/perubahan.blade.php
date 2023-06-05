@extends('template')
@section('konten')

<main id="main" class="main">

  <div class="pagetitle">
    <h1>SISTEM INFORMASI REKOMENDASI WISATA KEDIRI</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3>Tabel Bobot Nilai</h3>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Wisata</th>
                                    <th>Lokasi</th>
                                    <th>Fasilitas</th>
                                    <th>Keamanan</th>
                                    <th>Objek</th>
                                </tr>
                            </thead>
                            <tbody>
        
                                @php    
        
                                    $perhitungan_metode = json_decode( $metode->first()->origin );
        
                                @endphp 
                                @foreach ( $perhitungan_metode AS $isi )
                                <tr>
                                    <td>{{ $isi->ID_Wisata }}</td>
                                    <td>{{ $isi->Nama_Wisata }}</td>
                                    <td>{{ $isi->convert_kriteria_lokasi }}</td>
                                    <td>{{ $isi->convert_fasilitas }}</td>
                                    <td>{{ $isi->convert_keamanan }}</td>
                                    <td>{{ $isi->convert_objek }}</td>
                                </tr>
                                @endforeach 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
</main>









