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
                <th scope="col">Kode Bahan</th>
                <th scope="col">Kode Bahan</th>
                <th scope="col">Nama Bahan</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Perusahaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inventory as $inventory)
                <tr>
                    <td>{{ $inventory->kode_bahan }}</td>
                                                <td>{{ $inventory->kode_bahan }}</td>
                                                <td>{{ $inventory->nama_bahan }}</td>
                                                <td>{{ $inventory->jumlah }}</td>
                                                <td>{{ $inventory->harga }}</td>
                                                <td>{{ $inventory->perusahaan }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</body>

</html>
