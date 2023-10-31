@extends('template')
@section('title', 'Inventory Entry')
@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <strong class="card-title">Bahan Baku</strong>
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
                                        <form action="{{ url('/inventory/store') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label for="kode_bahan">Kode Bahan</label>
                                                <div class="input-group margin-bottom-sm">
                                                    <span class="input-group-addon"><i class="fa fa-id-badge fa-fw"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="kode_bahan"
                                                        class="form-control @error('kode_bahan') is-invalid @enderror"
                                                        value="{{ old('kode_bahan') }}" autofocus
                                                        placeholder="Kode Bahan">
                                                    @error('kode_bahan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                               
                                                <small class="text-muted">ex: KB00001</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_bahan">Nama Bahan</label>
                                                <div class="input-group margin-bottom-sm">
                                                    <span class="input-group-addon"><i class="fas fa-industry"></i></span>
                                                    <input type="text" name="nama_bahan"
                                                        class="form-control @error('nama_bahan') is-invalid @enderror"
                                                        value="{{ old('nama_bahan') }}" autofocus
                                                        placeholder="Nama Bahan">
                                                    @error('nama_bahan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                           
                                                <small class="text-muted">ex: Tepung</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="jumlah">Jumlah</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fas fa-list-ol"></i></span>
                                                    <input type="text" name="jumlah"
                                                        class="form-control @error('jumlah') is-invalid @enderror"
                                                        value="{{ old('jumlah') }}" autofocus placeholder="Jumlah">
                                                    @error('jumlah')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            
                                                <small class="text-muted">ex: 20</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="harga">Harga</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fas fa-money-check"></i></span>

                                                    <input type="text" name="harga"
                                                        class="form-control @error('harga') is-invalid @enderror"
                                                        value="{{ old('harga') }}" autofocus placeholder="harga">
                                                    @error('harga')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <small class="text-muted">ex: 2000</small>
                                            </div>
                                            <div class="form-group">
                                                <label for="perusahaan">Perusahaan</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-home fa-fw"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="perusahaan"
                                                        class="form-control @error('perusahaan') is-invalid @enderror"
                                                        value="{{ old('perusahaan') }}" autofocus placeholder="Perusahaan">
                                                    @error('perusahaan')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            
                                                <small class="text-muted">ex: Unilever</small>
                                            </div>
                          
                                            <button type="submit" class="btn btn-success" name="simpan"><i
                                                    class="fa fa-save"></i> Save
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
