@extends('layout')
@section('content')
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <h1 class="display-3 mb-4 animated slideInDown">{{ $title }}</h1>
        </div>
    </div>
    <div class="container my-5 pt-5">
        <div class="services_section layout_padding" style="margin-top: -130px">
            <div class="container-fluid">
                <div class="services_section_2">
                    <div class="row">
                        @foreach ($kategori as $row)
                            <div class="col-lg-4 col-sm-6 mb-4">
                                <div class="box_main active" style="height: 100%;">
                                    <a href="{{ url('kategoridetail/' . $row->kategori) }}">
                                        <h4 class="development_text">{{ $row->kategori }}</h4>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                {{ $kategori->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection
