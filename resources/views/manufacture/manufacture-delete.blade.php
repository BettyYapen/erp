@extends('template')
@section('title', 'Pemesanan Hapus')
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
                        </div>
                        <div class="card-body table-responsive">
                            <div class="card-body">
                                {{-- <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Kode Pemesan</th>
                                        <th scope="col">Nama Pemesan</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">No Telp</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pesan as $pesan)
                                        <tr>
                                            <td>{{ $pesan->kode_pemesan }}</td>
                                            <td>{{ $pesan->nama_pemesan }}</td>
                                            <td>{{ $pesan->email }}</td>
                                            <td>{{ $pesan->no_telp }}</td>
                                            <td>{{ $pesan->alamat }}</td>
                                            <td class="text-center">
                                                <a href="/pemesanan/edit/{{ $pesan->id_pemesan }}" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <a href="/pemesanan/hapus/{{ $pesan->id_pemesan }}" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                <tbody>
                                </tbody>
                            </table> --}}
                                <div class="form-login">
                                    <h4>Ingin Menghapus Data ?</h4>
                                    <form action="{{ url('/manufacture/destroy/' . $produksi->id_produk) }}"
                                        method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button type="submit" class="btn btn-simpan" name="hapus"
                                        style="width: 40%; margin: 20px auto;">
                                        <a href={{ url('/manufacture/destroy/' . $produksi->id_produk) }}>
                                            Yes
                                        </a>
                                    </button>
                                    <button type="submit" class="btn btn-simpan" name="tidak"
                                        style="width: 40%; margin: 20px auto;">
                                        <a href="/manufacture">
                                            No
                                        </a>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
