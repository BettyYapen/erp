<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('sbadmin/assets/css/style.css') }}">
    <title>Document</title>
    <style>
        * {
            success: #00FFFF;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            border-collapse: collapse;
        }

        thead {
            background-color: #00FFFF;
            color: black;
        }

        .table-data,
        tr {
            text-align: center;
        }

        th,
        td {
            border: 1px solid black;
            padding: 5px 20px;
        }

        body {
            font-size: 10px;
            margin: 2, 5cm 2cm 2cm 2cm;
        }
    </style>
</head>

<body>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Kode Bom</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Harga Produksi</th>
                <th scope="col">Tanggal Buat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($bom as $item)
                <tr>
                    <td>{{$item->kode_bom}}</td>
                    <td>{{$item->nama_produk}}</td>
                    <td>{{$item->total_harga}}</td>
                    <td>{{$item->tanggal}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
