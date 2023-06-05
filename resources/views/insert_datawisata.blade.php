<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Data Wisata</title>

     <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">FORM INSERT</h5>

          <!-- Vertical Form -->
          <form class="row g-3" action="{{ url('/save') }}" method="POST">
            @csrf
            <div class="col-12">
              <label for="inputAddress" class="form-label">ID_Wisata</label>
              <input type="text" name="id_wisata" class="form-control" id="inputAddress">
            </div>
            <div class="col-12">
              <label for="inputNanme4" class="form-label">Nama Wisata</label>
              <input type="text" name="nama_wisata"class="form-control" id="inputNanme4">
            </div>
            <div class="col-12">
              <label for="inputEmail4" class="form-label">Lokasi</label>
              <input type="text" name="lokasi" class="form-control" id="inputEmail4">
            </div>
            <div class="col-12">
              <label for="inputAddress" class="form-label">Harga Tiket</label>
              <input type="text" name="harga" class="form-control" id="inputAddress" >
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