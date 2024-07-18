@extends('layout')
@section('content')
    <!-- Carousel Start -->

    <!-- Carousel End -->

    <!-- Welcome Section Start -->
    <div class="container-xxl py-5" style="margin-top: 90px">
        <div class="container">
            <div class="row g-4 align-items-center mb-4">
                <div class="col-lg-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-4">Selamat Datang di Website Kami</h1>
                    <p class="lead">Website ini merupakan tempat untuk melihat berita terkini dan terbaik</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome Section End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 align-items-end mb-4">
                <div class="col-lg-6 wow fadeInUp my-auto" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="{{ asset('foto/bg.jpg') }}">
                </div>
                <div class="col-lg-6 wow fadeInUp my-auto" data-wow-delay="0.3s">
                    <h1 class="display-5">Tentang Kami</h1>
                    <p class="mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book. It has survived not only five
                        centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                        more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                        Ipsum
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection
