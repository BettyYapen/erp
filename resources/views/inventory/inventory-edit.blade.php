@extends('template')
@section('title', 'inventory Edit')
@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <strong class="card-title">inventory</strong>
                            </div>
                            <div class="pull-right">
                                <a href=" {{ url('/inventory') }}" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-undo"></i>Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 offset-md-4">
                                        <form action="{{ url('/inventory/update/' . $inventory->id_bahan) }}"
                                            method="post">
                                            @csrf
                                            @method('put')
                                            <input type="hidden" name="id" value="">
                                            <div class="form-group">
                                                <label for="kode_bahan">Kode Bahan</label>
                                                <div class="input-group margin-bottom-sm">
                                                    <span class="input-group-addon"><i class="fa fa-id-badge fa-fw"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="kode_bahan"
                                                        class="form-control @error('kode_bahan') is-invalid @enderror"
                                                        autofocus placeholder="Kode Bahan"
                                                        value="{{ old('kode_bahan', $inventory->kode_bahan) }}" />
                                                </div>
                                                <text>ex : KB00001</text><br><br>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_bahan">Nama Bahan</label>
                                                <div class="input-group margin-bottom-sm">
                                                    <span class="input-group-addon"><i class="fa fa-user fa-fw"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="nama_bahan"
                                                        class="form-control @error('nama_bahan') is-invalid @enderror"
                                                        autofocus placeholder="Nama Bahan"
                                                        value="{{ old('nama_bahan', $inventory->nama_bahan) }}" />
                                                </div>
                                                <text>ex : Tepung</text><br><br>
                                            </div>
                                            <div class="form-group">
                                                <label for="jumlah">Jumlah</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-phone fa-fw"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="jumlah"
                                                        class="form-control @error('jumlah') is-invalid @enderror"
                                                        autofocus placeholder="Jumlah"
                                                        value="{{ old('jumlah', $inventory->jumlah) }}" />
                                                </div>
                                                <text>ex : 1</text><br><br>
                                            </div>
                                            <div class="form-group">
                                                <label for="harga">Harga</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-phone fa-fw"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="harga"
                                                        class="form-control @error('harga') is-invalid @enderror"
                                                        autofocus placeholder="Harga"
                                                        value="{{ old('harga', $inventory->harga) }}" />
                                                </div>
                                                <text>ex : 10000</text><br><br>
                                            </div>
                                            <div class="form-group">
                                                <label for="perusahaan">Perusahaan</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-phone fa-fw"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="perusahaan"
                                                        class="form-control @error('perusahaan') is-invalid @enderror"
                                                        autofocus placeholder="Perusahaan"
                                                        value="{{ old('perusahaan', $inventory->perusahaan) }}" />
                                                </div>
                                                <text>ex : 10000</text><br><br>
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
    </div>
@endsection
