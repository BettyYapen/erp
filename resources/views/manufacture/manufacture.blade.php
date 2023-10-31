@extends('template')
@section('title', 'Manufacture')
@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <strong class="card-title">Produk</strong>
                            </div>
                            <div class="pull-right">
                                <a href="/manufacture/tambah" class="btn btn-success btn-sm">
                                    <i class="fa fa-plus"></i> Add
                                </a>
                                <a href="/manufacture/cetak" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-print"></i> Print
                                </a>
                               
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Kode Produk</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Harga Jual</th>
                                            <th scope="col">Biaya Produkasi</th>
                                            <th scope="col">Gambar</th>
                                            <th scope="col" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($produksi as $item)
                                            <tr>
                                                <td>{{ $item->kode_produk }}</td>
                                                <td>{{ $item->nama_produk }}</td>
                                                <td>{{ $item->jumlah }}</td>
                                                <td>{{ $item->harga_jual }}</td>
                                                <td>{{ $item->biaya_produksi }}</td>
                                                <td><img style="width: 75px; height: 75px;" src="/uploads/{{ $item->gambar }}" /></td>
                                                <td class="text-center">
                                                    <a href="/manufacture/edit/{{ $item->id_produk }}" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action=""></form>
                                                    <a href="/manufacture/delete/{{ $item->id_produk }}" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                        {{-- {{ $pesan->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
