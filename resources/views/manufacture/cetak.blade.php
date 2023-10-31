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
                <th scope="col">Kode Produk</th>
                                            <th scope="col">Kode Produk</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Harga Jual</th>
                                            <th scope="col">Biaya Produkasi</th>
                                            <th scope="col">Gambar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produksi as $produksi)
                <tr>
                    <td>{{ $produksi->kode_produk }}</td>
                    <td>{{ $produksi->kode_produk }}</td>
                    <td>{{ $produksi->nama_produk }}</td>
                    {{-- <td>{{ $produksi->datainventory->nama_bahan }}</td> --}}
                    <td>{{ $produksi->jumlah }}</td>
                    <td>{{ $produksi->harga_jual }}</td>
                    <td>{{ $produksi->biaya_produksi }}</td>
                    {{-- <td>{{public_path("/uploads/".$produksi->gambar); }}</td> --}}
                    <td><img style="width: 75px; height: 75px;" src="{{ public_path()."/uploads/".$produksi->gambar }}" /></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
