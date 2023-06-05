<!DOCTYPE html>
<html>
<head>
    <title>Data KetNilai</title>
</head>
<body>
    <h1>DATA KETERANGAN NILAI</h1>
    
    <table>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">ID Keterangan</th>
                <th scope="col">Keterangan Nilai</th>
                <th scope="col">Range Nilai</th>
                <th scope="col">Bobot Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->ID_Keterangan }}</td>
                    <td>{{ $item->Keterangan_Nilai}}</td>
                    <td>{{ $item->Range_Nilai}}</td>
                    <td>{{ $item->Bobot_Nilai}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
