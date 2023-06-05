<!DOCTYPE html>
<html>
<head>
    <title>Data Lokasi</title>
    <style>
        h1 {
            text-align: center;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>DATA KRITERIA LOKASI</h1>
    
    <table>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Lokasi</th>
                <th scope="col">ID Wisata</th>
                <th scope="col">Nama Wisata</th>
                <th scope="col">Nilai Krteria Lokasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($DtLokasi as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->ID_Lokasi }}</td>
                    <td>{{ $item->ID_Wisata}}</td>
                    <td>{{ $item->Nama_Wisata}}</td>
                    <td>{{ $item->Nilai_KriteriaLokasi}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
