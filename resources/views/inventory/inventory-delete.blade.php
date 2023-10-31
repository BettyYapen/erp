@extends('template')
@section('title', 'inventory Hapus')
@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="pull-left">
                                <strong class="card-title">Inventory</strong>
                            </div>
                        </div>
                        <div class="card-body table-responsive">
                            <div class="card-body">
                       
                                <div class="form-login">
                                    <h4>Ingin Menghapus Data ?</h4>
                                    <form action="{{ url('/inventory/destroy/' . $inventory->id_bahan) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button type="submit" class="btn btn-simpan" name="hapus"
                                        style="width: 40%; margin: 20px auto;">
                                        <a href={{ url('/inventory/destroy/' . $inventory->id_bahan) }}>
                                            Yes
                                        </a>
                                    </button>
                                    <button type="submit" class="btn btn-simpan" name="tidak"
                                        style="width: 40%; margin: 20px auto;">
                                        <a href="/inventory">
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
