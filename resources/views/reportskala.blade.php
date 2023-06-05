<!DOCTYPE html>
<html>
<head>
    <title>Data Skala</title>
</head>
<body>
    <h1>DATA SKALA PENILAIAN</h1>
    
    <table>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Skala Penilaian</th>
                <th scope="col">Jenis Kriteria</th>
                <th scope="col">Bobot Penilaian</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->ID_SkalaPenilaian }}</td>
                    <td>{{ $item->Jenis_Kriteria}}</td>
                    <td>{{ $item->Bobot_Penilaian}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
