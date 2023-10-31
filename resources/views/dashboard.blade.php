@extends('template')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Selamat datang di mochi kuyyy</h6>
        </div>
        <div class="card-body" style="position: relative;">
            <img src="{{ asset('template/img/mochi.png') }}" class="img-fluid rounded-circle" style="margin-bottom: 10px; float: left; margin-right: 10px; width: 100px;">
            <div style="float: left;">
                <h2>Find Your Special Cake</h2>
                <p>Cake Spesial Favoritmu sedang menunggu mu, ayo temukan mereka sekarang</p>
            </div>
            <div style="clear: both;"></div>
        </div>
    </div>
    {{-- <td><img style="width: 75px; height: 75px;" src="/uploads/{{ $item->gambar }}" /></td> --}}

    <!-- Tiga kotak di bawah dashboard -->
    <div class="row">
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Ichigo Daifuku Mochi</h6>
                </div>
                <div class="card-body">
                    <img src="{{ asset('template/img/strawberry.png') }}" class="img-fluid rounded-circle" style="margin-bottom: 10px;">
                    Ichigo Daifuku Mochi merupakan makanan khas Jepang yang terbuat dari 
                    tepung Mochiko yang salah satu dari sekian banyak jenis Wagashi atau Mochi.
                    Ichigo Daifuku umumnya memiliki isian pasta kacang merah dan disisipi isian 
                    berupa buah stroberi utuh.
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Daifuku Mochi</h6>
                </div>
                <div class="card-body">
                    <img src="{{ asset('template/img/mochi.jpeg') }}" class="img-fluid rounded-circle" style="margin-bottom: 10px;">
                    Daifuku Mochi merupakan makanan khas Jepang yang terbuat dari tepung Mochiko, 
                    Mochi bundar yang lembut diisi dengan pasta kacang merah (anko) yang manis atau 
                    pasta kacang putih (shiroan).
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class ="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Ice Cream Mochi</h6>
                </div>
                <div class="card-body">
                    <img src="{{ asset('template/img/eskrim.png') }}" class="img-fluid rounded-circle" style="margin-bottom: 10px;">
                    Bola kecil berwarna-warni dari mochi yang diisi dengan es krim. Mochi yang diproduksi 
                    secara tradisional menjadi keras sekeras batu ketika dibekukan dan Alhasil, mochi es 
                    krim adalah sejenis mochi terbuat dari tepung bernama mochiko yang menghasilkan tekstur 
                    seperti mochi.
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir tiga kotak -->

  
@endsection
