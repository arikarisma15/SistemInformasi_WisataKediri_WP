<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>




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
                <h1></h1>
                <h1></h1>
                <h1></h1>
                <h1></h1>
                <h1 class="card-title text-center mb-4">DATA WISTA KEDIRI</h1>
                 <!-- <p>Add <code>.table-bordered</code> for borders on all sides of the table and cells.</p> -->
                  <button type="button" class="btn btn-success">Tambah + </button>
           
                  <!-- Bordered Table -->
                  <table class="table table-bordered">
                    <thead>
                    <br><br>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">ID Wisata</th>
                        <th scope="col">Nama Wisata</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Harga Tiket</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($data_wisata as $item)
                        <tr>
                            <th scope="row">{{ $item->No }}</th>
                            <td>{{ $item->ID_Wista }}</td>
                            <td>{{ $item->Nama_Wista}}</td>
                            <td>{{ $item->Lokasi}}</td>
                            <td>{{ $item->Harga_Tiket}}</td>
                            <td>
                                <button type="button" class="btn btn-primary">Update</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                          </tr>   
                        @endforeach
                    
                    </tbody>
                  </table>
                  <!-- End Bordered Table 
    
            <p><a href="https://getbootstrap.com/docs/5.0/utilities/borders/#border-color" target="_blank">Border color utilities</a> can be added to change colors:</p>-->
        </div>
    </div>


</body>
</html>