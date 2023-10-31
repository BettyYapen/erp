@extends('template')
@section('title', 'Inventory')
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
                                <strong class="card-title">Bahan Baku</strong>
                            </div>
                            <div class="pull-right">
                                <a href="/inventory/tambah" class="btn btn-success btn-sm">
                                    <i class="fa fa-plus"></i> Add
                                </a>
                                <a href="/inventory/cetak" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-print"></i> Print
                                </a>
                               
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Kode Bahan</th>
                                            <th scope="col">Nama Bahan</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Perusahaan</th>
                                           
                                            <th scope="col" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($inventory as $item)
                                            <tr>
                                                <td>{{ $item->kode_bahan }}</td>
                                                <td>{{ $item->nama_bahan }}</td>
                                                <td>{{ $item->jumlah }}</td>
                                                <td>{{ $item->harga }}</td>
                                                <td>{{ $item->perusahaan }}</td>
    
                                                <td class="text-center">
                                                    <a href="/inventory/edit/{{ $item->id_bahan }}"
                                                        class="btn btn-primary btn-sm">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <form action=""></form>
                                                    <a href="/inventory/delete/{{ $item->id_bahan }}"
                                                        class="btn btn-danger btn-sm">
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
