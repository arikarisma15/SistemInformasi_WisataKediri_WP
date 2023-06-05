<!DOCTYPE html>
<html>
<head>
    <title>Data Lokasi</title>
</head>
<body>
    <h1>DATA KRITERIA KEAMANAN</h1>
    
    <table>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Keamanan</th>
                <th scope="col">ID Wisata</th>
                <th scope="col">Nama Wisata</th>
                <th scope="col">Nilai Krteria Keamanan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($DtKeamanan as$item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->ID_Keamanan }}</td>
                    <td>{{ $item->ID_Wisata}}</td>
                    <td>{{ $item->Nama_Wisata}}</td>
                    <td>{{ $item->Nilai_KriteriaKeamanan}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
