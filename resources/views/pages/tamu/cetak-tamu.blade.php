<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.static {
            position: relative;
            border: 1px solid #543535;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="form-group">
        <h1 align="center"><b>Laporan Data Tamu</b></h1>
        <p align="center">SD ISLAM TERPADU USAMAH</p>
        <table class="static" align="center" rules="all" border="1px" style="width: 95%;">
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>Instansi</th>
                <th>Nomor Telepon</th>
                <th>Tanggal</th>
                <th>Keperluan</th>
            </tr>
            @foreach ($cetaktamu as $ctamu)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $ctamu->nama }}</td>
                <td>{{ $ctamu->instansi }}</td>
                <td>{{ $ctamu->notelp }}</td>
                <td>{{ $ctamu->created_at }}</td>
                <td>{{ $ctamu->keperluan }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>