@extends('template')
@section('title', 'Manufacture Entry')
@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <strong class="card-title">Produk</strong>
                            </div>
                            <div class="pull-right">
                                <a href=" {{ url('/manufacture') }}" class="btn btn-secondary btn-sm">
                                    <i class="fa fa-undo"></i>Back
                                </a>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 offset-md-4">
                                        <form action="{{ url('/manufacture/store') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="kode_produk">Produk</label>
                                                <div class="input-group margin-bottom-sm">
                                                    <span class="input-group-addon"><i class="fa fa-id-badge fa-fw"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="kode_produk"
                                                        class="form-control @error('kode_produk') is-invalid @enderror"
                                                        value="{{ old('kode_produk') }}" autofocus
                                                        placeholder="Kode produk">
                                                    @error('kode_produk')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <small class="text-muted">ex : KM0001</small>
                                               
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_produk">Nama Produk</label>
                                                <div class="input-group margin-bottom-sm">
                                                    <span class="input-group-addon"><i class="fas fa-list-ol"></i></span>
                                                    <input type="text" name="nama_produk"
                                                        class="form-control @error('nama_produk') is-invalid @enderror"
                                                        value="{{ old('nama_produk') }}" autofocus placeholder="Nama Produk">
                                                    @error('nama_produk')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                             
                                                <small class="text-muted">ex: 20</small>
                                            </div>
                                            
                                            

                                            <div class="form-group">
                                                <label for="jumlah">Jumlah</label>
                                                <div class="input-group margin-bottom-sm">
                                                    <span class="input-group-addon"><i class="fas fa-list-ol"></i></span>
                                                    <input type="text" name="jumlah"
                                                        class="form-control @error('jumlah') is-invalid @enderror"
                                                        value="{{ old('jumlah') }}" autofocus placeholder="Jumlah Stok">
                                                    @error('jumlah')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                             
                                                <small class="text-muted">ex: 20</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="harga_jual">Harga Jual</label>
                                                <div class="input-group margin-bottom-sm">
                                                    <span class="input-group-addon"><i class="fas fa-money-check"></i></span>
                                                    <input type="text" name="harga_jual"
                                                        class="form-control @error('harga_jual') is-invalid @enderror"
                                                        value="{{ old('harga_jual') }}" autofocus placeholder="Harga Jual">
                                                    @error('harga_jual')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                           
                                                <small class="text-muted">ex: 2000</small>
                                            </div>

                                            <div class="form-group">
                                                <label for="biaya_produksi">Biaya Produksi</label>
                                                <div class="input-group margin-bottom-sm">
                                                    <span class="input-group-addon"><i class="fas fa-money-bill"></i></span>

                                                    <input type="text" name="biaya_produksi"
                                                        class="form-control @error('biaya_produksi') is-invalid @enderror"
                                                        value="{{ old('biaya_produksi') }}" autofocus placeholder="Biaya Produksi">
                                                    @error('biaya_produksi')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                       
                                                <small class="text-muted">ex: 2000</small>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="gambar">Gambar</label>
                                                <div class="input-group margin-bottom-sm">
                                                    <span class="input-group-addon"><i class="fas fa-money-bill"></i></span>

                                                    <input type="file" name="gambar"
                                                        class="form-control @error('gambar') is-invalid @enderror"
                                                        value="{{ old('gambar') }}" >
                                                    @error('gambar')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                

                                       
                                                <small class="text-muted">ex: 2000</small>
                                            </div>
                                            {{-- <div class="form-group">
                                                <label for="email">Email</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        value="{{ old('email') }}" autofocus placeholder="Email address">
                                                    @error('email')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <text>ex : amelya@gmail.com</text><br><br>
                                            </div>
                                            <div class="form-group">
                                                <label for="no_telp">No Telp</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-phone fa-fw"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="no_telp"
                                                        class="form-control @error('no_telp') is-invalid @enderror"
                                                        value="{{ old('no_telp') }}" autofocus placeholder="No Telp">
                                                    @error('no_telp')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <text>ex : 085335076385</text><br><br>
                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-home fa-fw"
                                                            aria-hidden="true"></i></span>
                                                    <input type="text" name="alamat"
                                                        class="form-control @error('alamat') is-invalid @enderror"
                                                        value="{{ old('alamat') }}" autofocus placeholder="Alamat">
                                                    @error('alamat')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <text>ex : Jl Sulawesi No.3, Kota Blitar</text><br><br>
                                            </div> --}}

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
