@extends('template')
@section('title', 'Bom Entry')
@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="pull-left">
                            <strong class="card-title">Bill Of Matrials</strong>
                        </div>
                        <div class="pull-right">
                            <a href=" {{ url('/bom/tambah') }}" class="btn btn-secondary btn-sm">
                                <i class="fa fa-undo"></i>Back
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 offset-md-4">
                                    
                                    <form action="{{ url('product/bom-input-item') }}" method="post">
                                        @csrf
                                        {{-- Dropdown Jenis --}}


                                        {{-- / Dropdown --}}

                                        <div class="form-group">
                                            <label for="kode_bom">Kode BOM</label>
                                            <div class="input-group margin-bottom-sm">
                                                <span class="input-group-addon"></span>
                                               
                                                <input type="text" name="kode_bom" value={{$bom->kode_bom}} class="form-control @error('kode_bom') is-invalid 
                                                        @enderror" autofocus placeholder="Kode BOM">
                                                @error('kode_bom')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            {{-- <small class="text-muted">Satuan Kg</small> --}}
                                        </div>

                                            <div class="form-group">
                                                <label for="nama_bahan">Pilih Bahan</label>
                                                <div class="input-group margin-bottom-sm">
                                                    <select name="kode_bahan" id="nama_bahan" class="form-control @error('nama_bahan') is-invalid @enderror">
                                                        @foreach ($materials as $bahan)
                                                        <option value="{{ $bahan->id_bahan}}">
                                                            {{ $bahan->id_bahan . ' - ' . $bahan->nama_bahan }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    @error('nama_bahan')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                          
                                            

                                        <div class="form-group">
                                            <label for="quantity">Jumlah</label>
                                            <div class="input-group margin-bottom-sm">
                                                <span class="input-group-addon"></span>
                                                <input type="text" name="quantity" step="0.01" class="form-control @error('quantity') is-invalid @enderror" autofocus placeholder="Jumlah Stok">
                                                @error('quantity')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <small class="text-muted">Satuan Kg</small>
                                        </div>

                                        <button type="submit" class="btn btn-success" name="simpan"><i class="fa fa-save"></i> Masukkan
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <div class="card-body">
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
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection