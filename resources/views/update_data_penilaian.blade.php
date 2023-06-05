<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Data Penilaian</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">FORM UPDATE</h5>

                    <!-- Vertical Form -->
                    <form action="{{ url('/updatedata_penilaian/' . $DtPenilaian->ID_Penilaian) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">ID Penilian</label>
                            <input type="text" value="{{ $DtPenilaian->ID_Penilaian }}" name="id_penilaian"
                                class="form-control" id="inputAddress">
                        </div>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">ID Wisata</label>
                            <select class="form-control" name="id_wisata" required>
                                @foreach ($wisata as $w)
                                    <option {{ $w->ID_Wisata == $DtPenilaian->ID_Wisata ? 'selected' : '' }}
                                        value="{{ $w->ID_Wisata }}">
                                        {{ $w->ID_Wisata }} - {{ $w->Nama_Wisata }}
                                    </option>
                                @endforeach
                            </select>
                            {{-- <input type="text" name="id_wisata"class="form-control" id="inputNanme4"> --}}
                        </div>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">ID Lokasi</label>
                            <select class="form-control" name="id_lokasi" id="id_lokasi" required>
                                @foreach ($lokasi as $l)
                                    <option {{ $l->ID_Lokasi == $DtPenilaian->ID_Lokasi ? 'selected' : '' }}
                                        value="{{ $l->ID_Lokasi }}">
                                        {{ $l->ID_Lokasi }}
                                    </option>
                                @endforeach
                            </select>
                            {{-- <input type="text" name="id_wisata"class="form-control" id="inputNanme4"> --}}
                        </div>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">ID Fasilitas</label>
                            <select class="form-control" name="id_fasilitas" id="id_fasilitas" required>
                                @foreach ($fasilitas as $f)
                                    <option {{ $f->ID_Fasilitas == $DtPenilaian->ID_Fasilitas ? 'selected' : '' }}
                                        value="{{ $f->ID_Fasilitas }}">
                                        {{ $f->ID_Fasilitas }}
                                    </option>
                                @endforeach
                            </select>
                            {{-- <input type="text" name="id_wisata"class="form-control" id="inputNanme4"> --}}
                        </div>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">ID Keamanan</label>
                            <select class="form-control" name="id_keamanan" id="id_keamanan" required>
                                @foreach ($keamanan as $ke)
                                    <option {{ $ke->ID_Keamanan == $DtPenilaian->ID_Keamanan ? 'selected' : '' }}
                                        value="{{ $ke->ID_Keamanan }}">
                                        {{ $ke->ID_Keamanan }}
                                    </option>
                                @endforeach
                            </select>
                            {{-- <input type="text" name="id_wisata"class="form-control" id="inputNanme4"> --}}
                        </div>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">ID Objek Atraksi</label>
                            <select class="form-control" name="id_objekatraksi" id="id_objekatraksi" required>
                                @foreach ($objekatraksi as $o)
                                    <option {{ $o->ID_ObjekAtraksi == $DtPenilaian->ID_ObjekAtraksi ? 'selected' : '' }}
                                        value="{{ $o->ID_ObjekAtraksi }}">
                                        {{ $o->ID_ObjekAtraksi }}
                                    </option>
                                @endforeach
                            </select>
                            {{-- <input type="text" name="id_wisata"class="form-control" id="inputNanme4"> --}}
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-secondary">Reset</button>
                        </div>
                    </form><!-- Vertical Form -->

                </div>
            </div>
        </div>
    </div>

</body>

</html>
