<!DOCTYPE html>
<html>
<head>
    <title>Data Lokasi</title>
</head>
<body>
    <h1>DATA KRITERIA OBJEK ATRAKSI</h1>
    
    <table>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Objek Atraksi</th>
                <th scope="col">ID Wisata</th>
                <th scope="col">Nama Wisata</th>
                <th scope="col">Nilai Krteria Objek Atraksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Dtobjek as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->ID_ObjekAtraksi }}</td>
                    <td>{{ $item->ID_Wisata }}</td>
                    <td>{{ $item->Nama_Wisata }}</td>
                    <td>{{ $item->Nilai_KriteriaObjekAtraksi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
