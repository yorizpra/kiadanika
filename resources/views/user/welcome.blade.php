@extends('user.app')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="images/home/a.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/home/b.png" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/home/c.jpg"
                alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="site-section site-section-sm site-blocks-1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-truck"></span>
                </div>
                <div class="text">
                    <h2 class="text-uppercase">Pengiriman</h2>
                    <p>Pengiriman bisa ke seluruh wilayah indonesia dengan kurir JNE</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-star"></span>
                </div>
                <div class="text">
                    <h2 class="text-uppercase">Kualitas Oke</h2>
                    <p>Kualitas barangnya terjamin karena semuanya disini original bukan kw.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="icon mr-4 align-self-start">
                    <span class="icon-security"></span>
                </div>
                <div class="text">
                    <h2 class="text-uppercase">Keamanan</h2>
                    <p>Kami menjamin keamanan dalam pengiriman barang sampai diterima oleh anda.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="site-section block-3 site-blocks-2 bg-light" data-aos="fade-up">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 site-section-heading text-center pt-4">
                <h2>Produk Terlaris</h2>
            </div>
        </div>
        <div class="row mb-5">
                @foreach($produks as $produk)
                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                    <a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}">
                        <img src="{{ asset('storage/' . $produk->image) }}" alt="Image placeholder" class="img-fluid" width="100%" style="height:200px">
                    </a>
                    <div class="block-4-text p-4">
                    <h3><a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}">{{ $produk->name }}</a></h3>
                    <p class="mb-0">RP {{ $produk->price }}</p>
                    <a href="{{ route('user.produk.detail',['id' =>  $produk->id]) }}" class="btn btn-primary mt-2">Detail</a>
                    </div>
                </div>
                </div>
                @endforeach
                
    
            </div>
    </div>
</div>
@endsection
