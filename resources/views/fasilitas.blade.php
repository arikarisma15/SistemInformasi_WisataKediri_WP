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
            <div class="card">
                <div class="card-body">
                <h1></h1>
                <h1></h1>
                <h1></h1>
                <h1></h1>
                <h1 class="card-title text-center mb-4">Nilai Kriteria Fasilitas</h1>
                 <!-- <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p> -->
                  <a href="/insertfasilitas" class="btn btn-success">Tambah + </a>
                  <a href="/reportfasilitas" class="btn btn-success">Cetak </a>

                  <!-- Bordered Table -->
                  <table class="table table-bordered">
                    <thead>
                    <br><br>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Fasilitas</th>
                        <th scope="col">ID Wisata</th>
                        <th scope="col">Nama Wisata</th>
                        <th scope="col">Nilai Krteria Fasilitas</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($DtFasilitas as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->ID_Fasilitas }}</td>
                            <td>{{ $item->ID_Wisata}}</td>
                            <td>{{ $item->Nama_Wisata}}</td>
                            <td>{{ $item->Nilai_KriteriaFasilitas}}</td>
                            <td>
                                <a href="/editfasilitas/{{ $item->ID_Fasilitas }}" class="btn btn-primary btn-sm">Update</a>
                                <a href="/deletefasilitas/{{ $item->ID_Fasilitas }}" class="btn btn-danger btn-sm">Delete</a>
                            </td>
                          </tr>
                        @endforeach

                    </tbody>
                  </table>
                  <!-- End Bordered Table

            <p><a href="https://getbootstrap.com/docs/5.0/utilities/borders/#border-color" target="_blank">Border color utilities</a> can be added to change colors:</p>-->
        </div>
    </div>
  </section>
</main>
