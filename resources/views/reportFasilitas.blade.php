<!DOCTYPE html>
<html>
<head>
    <title>Data Fasilitas</title>
</head>
<body>
    <h1>DATA KRITERIA FASILITAS</h1>
    
    <table>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Failitas</th>
                <th scope="col">ID Wisata</th>
                <th scope="col">Nama Wisata</th>
                <th scope="col">Nilai Krteria Fasilitas</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Dtfasilitas as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->ID_Fasilitas }}</td>
                    <td>{{ $item->ID_Wisata}}</td>
                    <td>{{ $item->Nama_Wisata}}</td>
                    <td>{{ $item->Nilai_KriteriaFasilitas}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
