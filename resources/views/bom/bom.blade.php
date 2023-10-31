@extends('template')
@section('title', 'Bom')
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
                                <strong class="card-title">Bills of Materials</strong>
                            </div>
                            <div class="pull-right">
                                <a href="/product/bom-input" class="btn btn-success btn-sm">
                                    <i class="fa fa-plus"></i> Add
                                </a>
                                <a href="/bom/cetak" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-print"></i> Print
                                </a>
                              
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Kode Bom</th>
                                            <th scope="col">Nama Produk</th>
                                            <th scope="col">Harga Produksi</th>
                                            <th scope="col">Tanggal Buat</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if($boms->count())
                                        @foreach($boms as $item)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td>{{$item->kode_bom}}</td>
                                            <td>{{$item->nama_produk}}</td>
                                            <td>{{$item->total_harga}}</td>
                                            <td>{{$item->tanggal}}</td>
                                            <td>
                                                <a href="{{ url('/product/bom-input-item/'.$item->kode_bom) }}" class="btn btn-warning" role="button">Edit</a>
                                                <a href="/product/bom/delete/{{$item->kode_bom}}" class="btn btn-danger delete-confirm" role="button">Hapus</a>
                                                <a href="/bom/cetak/detail/{{$item->kode_bom}}" class="btn btn-info" role="button">Cetak</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                        @else
                                        <tr>
                                            <td colspan="7"> No record found </td>
                                        </tr>
                                        @endif
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
