<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Keamanan</title>

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
                    <form action="{{ url('/updatekeamanan/' . $DtKeamanan->ID_Keamanan) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">ID Keamanan</label>
                            <input type="text" value="{{ $DtKeamanan->ID_Keamanan }}" name="id_keamanan"
                                class="form-control" id="inputAddress" disabled>
                        </div>
                        <div class="col-12">
                            <label for="inputNanme4" class="form-label">ID Wisata</label>
                            <select class="form-control" name="id_wisata" required>
                                @foreach ($wisata as $k)
                                    <option {{ $k->ID_Wisata == $DtKeamanan->ID_Wisata ? 'selected' : '' }}
                                        value="{{ $k->ID_Wisata }}">
                                        {{ $k->ID_Wisata }} - {{ $k->Nama_Wisata }}
                                    </option>
                                @endforeach
                            </select>
                            {{-- <input type="text" value="{{ $DtKeamanan->ID_Wisata }}"
                                name="id_wisata"class="form-control" id="inputNanme4"> --}}
                        </div>
                        <div class="col-12">
                            <label for="inputEmail4" class="form-label">Nilai Kriteria Keamanan</label>
                            <input type="text" value="{{ $DtKeamanan->Nilai_KriteriaKeamanan }}"
                                name="nilai_kriteriakeamanan" class="form-control" id="inputEmail4">
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
