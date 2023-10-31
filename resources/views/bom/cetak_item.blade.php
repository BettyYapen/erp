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
                    <th scope="col">No</th>
                    <th scope="col">Kode</th>
                    <th scope="col">Nama Bahan</th>
                    <th scope="col">Quantity</th>
                    {{-- <th scope="col">Satuan</th> --}}
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Harga Total</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @if($list->count())
                @foreach($list as $item)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$item->kode_bom}}</td>
                    <td>{{$item->nama_bahan}}</td>
                    <td>{{$item->quantity}}</td>
                    {{-- <td>{{$item->satuan}}</td> --}}
                    <td>{{$item->harga}}</td>
                    @php
                    {{
                        $total = $item->harga * $item->quantity;
                    }}
                    @endphp
                    <td>{{$total}}</td>
                    <td>
                        <a href="{{ url('product/bom-delete-item/'.$item->kode_bom_list) }}" class="btn btn-danger delete-confirm" role="button">Hapus</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
</body>

</html>
