@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100 slideshow-img" src="images/home/slideshow_batik_1.jpg" alt="Batik">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 slideshow-img" src="images/home/slideshow_batik_2.jpg" alt="Batik">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 slideshow-img" src="images/home/slideshow_batik_3.jpg" alt="Batik">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </div>
    <div class="row p-3 mt-3">
        <div class="col-4 text-center ">
            <img class="mb-4 w-25 " src="images/icon/quality.png" alt="Quality">
            <h4> Kualitas Bermutu Tinggi </h4>
            <p> Kami menyediakan berbagai macam batik dengan kualitas yang terbaik dari tangan pertama </p>
        </div>
        <div class="col-4 text-center">
            <img class="mb-4 w-25 " src="images/icon/price.png" alt="Price">
            <h4> Harga Terjangkau </h4>
            <p> Kami memiliki produk dengan harga yang lebih murah dan terjangkau dari toko batik lainnya. </p>
        </div>
        <div class="col-4 text-center">
            <img class="mb-4 w-25 " src="images/icon/courier.png" alt="Courier">
            <h4> Pengiriman Cepat </h4>
            <p> Pengiriman akan langsung di proses dan akan tiba di rumah Anda pada h+1 pembayaran. </p>
        </div>
    </div>

    {{-- Produk terlaris 4 row aja --}}
    <div class="row mt-5">
        <h2 class="font-weight-bold mb-4 sub-title text-center"> Produk Terlaris </h2>
        <div class="col-3">
            <div class="card">
                <img class="card-img" src="images/product/product1.jpg" alt="Batik">
                <div class="card-body">
                  <h4 class="card-title"> Baju Batik Modern </h4>
                  <h6 class="card-subtitle mb-2 text-muted">Ukuran: L</h6>
                  <p class="card-text">
                    Baju batik modern wanita yang dibuat dengan bahan katun, ketebalan sedang. Cocok untuk dipakai acara formal maupun semi formal </p>
                </div>
                <div class="buy d-flex justify-content-between align-items-center px-3 pb-2">
                    <div class="price text-success"><h5 class="mt-2">Rp 100.000</h5></div>
                     <a href="#" class="btn btn-danger mt-1"> Beli </a>
                </div>
            </div>     
        </div>
        <div class="col-3">
            <div class="card">
                <img class="card-img" src="images/product/product1.jpg" alt="Batik">
                <div class="card-body">
                  <h4 class="card-title"> Baju Batik Modern </h4>
                  <h6 class="card-subtitle mb-2 text-muted">Ukuran: L</h6>
                  <p class="card-text">
                    Baju batik modern wanita yang dibuat dengan bahan katun, ketebalan sedang. Cocok untuk dipakai acara formal maupun semi formal </p>
                </div>
                <div class="buy d-flex justify-content-between align-items-center px-3 pb-2">
                    <div class="price text-success"><h5 class="mt-2">Rp 100.000</h5></div>
                     <a href="#" class="btn btn-danger mt-1"> Beli </a>
                </div>
            </div>     
        </div>
        <div class="col-3">
            <div class="card">
                <img class="card-img" src="images/product/product1.jpg" alt="Batik">
                <div class="card-body">
                  <h4 class="card-title"> Baju Batik Modern </h4>
                  <h6 class="card-subtitle mb-2 text-muted">Ukuran: L</h6>
                  <p class="card-text">
                    Baju batik modern wanita yang dibuat dengan bahan katun, ketebalan sedang. Cocok untuk dipakai acara formal maupun semi formal </p>
                </div>
                <div class="buy d-flex justify-content-between align-items-center px-3 pb-2">
                    <div class="price text-success"><h5 class="mt-2">Rp 100.000</h5></div>
                     <a href="#" class="btn btn-danger mt-1"> Beli </a>
                </div>
            </div>     
        </div>
        

        <h2 class="font-weight-bold mb-4 mt-5 sub-title text-center"> Produk Terbaru </h2>
        <div class="col-3">
            <div class="card">
                <img class="card-img" src="images/product/product1.jpg" alt="Batik">
                <div class="card-body">
                  <h4 class="card-title"> Baju Batik Modern </h4>
                  <h6 class="card-subtitle mb-2 text-muted">Ukuran: L</h6>
                  <p class="card-text">
                    Baju batik modern wanita yang dibuat dengan bahan katun, ketebalan sedang. Cocok untuk dipakai acara formal maupun semi formal </p>
                </div>
                <div class="buy d-flex justify-content-between align-items-center px-3 pb-2">
                    <div class="price text-success"><h5 class="mt-2">Rp 100.000</h5></div>
                     <a href="#" class="btn btn-danger mt-1"> Beli </a>
                </div>
            </div>     
        </div>
        <div class="col-3">
            <div class="card">
                <img class="card-img" src="images/product/product1.jpg" alt="Batik">
                <div class="card-body">
                  <h4 class="card-title"> Baju Batik Modern </h4>
                  <h6 class="card-subtitle mb-2 text-muted">Ukuran: L</h6>
                  <p class="card-text">
                    Baju batik modern wanita yang dibuat dengan bahan katun, ketebalan sedang. Cocok untuk dipakai acara formal maupun semi formal </p>
                </div>
                <div class="buy d-flex justify-content-between align-items-center px-3 pb-2">
                    <div class="price text-success"><h5 class="mt-2">Rp 100.000</h5></div>
                     <a href="#" class="btn btn-danger mt-1"> Beli </a>
                </div>
            </div>     
        </div>
        <div class="col-3">
            <div class="card">
                <img class="card-img" src="images/product/product1.jpg" alt="Batik">
                <div class="card-body">
                  <h4 class="card-title"> Baju Batik Modern </h4>
                  <h6 class="card-subtitle mb-2 text-muted">Ukuran: L</h6>
                  <p class="card-text">
                    Baju batik modern wanita yang dibuat dengan bahan katun, ketebalan sedang. Cocok untuk dipakai acara formal maupun semi formal </p>
                </div>
                <div class="buy d-flex justify-content-between align-items-center px-3 pb-2">
                    <div class="price text-success"><h5 class="mt-2">Rp 100.000</h5></div>
                     <a href="#" class="btn btn-danger mt-1"> Beli </a>
                </div>
            </div>     
        </div>
        <div class="col-3">
            <div class="card">
                <img class="card-img" src="images/product/product1.jpg" alt="Batik">
                <div class="card-body">
                  <h4 class="card-title"> Baju Batik Modern </h4>
                  <h6 class="card-subtitle mb-2 text-muted">Ukuran: L</h6>
                  <p class="card-text">
                    Baju batik modern wanita yang dibuat dengan bahan katun, ketebalan sedang. Cocok untuk dipakai acara formal maupun semi formal </p>
                </div>
                <div class="buy d-flex justify-content-between align-items-center px-3 pb-2">
                    <div class="price text-success"><h5 class="mt-2">Rp 100.000</h5></div>
                     <a href="#" class="btn btn-danger mt-1"> Beli </a>
                </div>
            </div>     
        </div>

    </div>

    <div class="row mt-5">
        <a href="" class="text-decoration-none text-muted"><p class="text-center"> Produk Lainnya </p></a>
    </div>
</div>
@endsection
