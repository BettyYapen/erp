@extends('template')
@section('title', 'Bom Edit')
@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <strong class="card-title">Bill Of Materials</strong>
                            </div>
                            <div class="pull-right">
                                <a href=" {{ url('/bom') }}" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-undo"></i>Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 offset-md-4">
                                        <form action="{{ url('/bom/update/' . $produksi->id_produk) }}"
                                            method="post">
                                            @csrf
                                            @method('put')
                                            <input type="hidden" name="id" value="">
                                            
                                            <div class="form-group">
                                                <label for="kode_produk">Kode Produk</label>
                                                <div class="input-group margin-bottom-sm">
                                                    <span class="input-group-addon"><i class="fa fa-id-badge fa-fw"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="kode_produk"
                                                        class="form-control @error('kode_produk') is-invalid @enderror"
                                                        autofocus placeholder="Kode Produk"
                                                        value="{{ old('kode_produk', $produksi->kode_produk) }}" />
                                                </div>
                                            </div>

                                            {{-- <div class="form-group">
                                                <label for="nama_produk">Nama Produk</label>
                                                <div class="input-group margin-bottom-sm">
                                                    <span class="input-group-addon"><i class="fa fa-id-badge fa-fw"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="nama_produk"
                                                        class="form-control @error('nama_produk') is-invalid @enderror"
                                                        autofocus placeholder="Kode Produk"
                                                        value="{{ old('nama_produk', $produksi->nama_produk) }}" />
                                                </div>
                                            </div> --}}

                                            <div class="form-group">
                                                <label for="jumlah">Jumlah</label>
                                                <div class="input-group margin-bottom-sm">
                                                    <span class="input-group-addon"><i class="fa fa-phone fa-fw"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="jumlah"
                                                        class="form-control @error('jumlah') is-invalid @enderror"
                                                        autofocus placeholder="Jumlah"
                                                        value="{{ old('jumlah', $produksi->jumlah) }}" />
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <label for="cost">Cost</label>
                                                <div class="input-group margin-bottom-sm">
                                                    <span class="input-group-addon"><i class="fa fa-id-badge fa-fw"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="cost"
                                                        class="form-control @error('cost') is-invalid @enderror"
                                                        autofocus placeholder="Cost"
                                                        value="{{ old('cost', $produksi->cost) }}" />
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="harga">Harga</label>
                                                <div class="input-group margin-bottom-sm">
                                                    <span class="input-group-addon"><i class="fa fa-id-badge fa-fw"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="harga"
                                                        class="form-control @error('harga') is-invalid @enderror"
                                                        autofocus placeholder="Harga"
                                                        value="{{ old('harga', $produksi->harga) }}" />
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-success" name="edit"><i
                                                class="fa fa-edit"></i> Edit
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
