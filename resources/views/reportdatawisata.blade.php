<!DOCTYPE html>
<html>
<head>
    <title>Data Wisata</title>
</head>
<body>
    <h1>DATA WISATA KEDIRI</h1>
    
    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>ID Wisata</th>
                <th>Nama Wisata</th>
                <th>Lokasi</th>
                <th>Harga Tiket</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $item->ID_Wisata }}</td>
                    <td>{{ $item->Nama_Wisata}}</td>
                    <td>{{ $item->Lokasi}}</td>
                    <td>{{ $item->Harga_Tiket}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
