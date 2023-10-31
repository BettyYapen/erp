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
                            <a href=" {{ url('/bom') }}" class="btn btn-secondary btn-sm">
                                <i class="fa fa-undo"></i>Back
                            </a>
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 offset-md-4">
                                    <form action="{{ url('product/bom-input') }}" method="post">
                                        {{ csrf_field() }}
            <div>
                <div class="form-group">
                    <label for="nama_product">ID Bom</label>
                    <input type="text" class="form-control" id="kode_bom" name="kode_bom" required>
                </div>
                <div class="form-group">
                    <label for="select_item">Pilih Product</label>
                    <br>
                    <select class="theSelect" name="kode_produk">
                        @if($products->count())
                        @foreach($products as $item)
                        <option value="{{$item->kode_produk}}">{{$item->nama_produk}}</option>
                        @endforeach
                        @endif
                    </select>
                    <button class="btn btn-success" name="simpan" type="submit">next</button>
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