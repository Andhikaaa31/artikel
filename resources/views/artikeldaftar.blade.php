@extends('layout')
@section('content')
    <div class="container-fluid my-5 pt-5">
        <div class="container-fluid page-header mb-5 wow fadeIn">
            <div class="container">
                <h1 class="display-3 mb-4 animated slideInDown">{{ $title }}</h1>
            </div>
        </div>
        <div class="container pt-5">
            <form method="get" action="{{ url('artikeldaftarcari') }}">
                @csrf
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4 col-4">
                            <input type="text" name="keyword" class="form-control"
                                placeholder="Masukkan keyword pencarian">
                        </div>
                        <div class="col-md-4 col-4">
                            <button type="submit" class="btn btn-success">Cari</button>
                        </div>
                    </div>
                </div>
            </form>
            <div class="services_section layout_padding">
                <div class="container-fluid">
                    <div class="services_section_2">
                        <div class="row">
                            @foreach ($artikel as $row)
                                <div class="col-lg-4 col-sm-6 mb-4">
                                    <div class="box_main active" style="height: 100%;">
                                        <h4 class="development_text">{{ potong($row->judul, 35) }}...</h4>
                                        <span>tanggal: {{ tanggal($row->tanggal) }}</span><br>
                                        <span>kategori: {{ $row->kategori }}</span><br>
                                        <span>tag: {{ $row->tag }}</span>
                                        <p class="services_text">{!! potong($row->isiartikel, 100) !!}...</p>
                                        <div class="readmore_bt"><a
                                                href="{{ url('artikeldetail/' . $row->idartikel) }}">Read More</a></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    {{ $artikel->links('pagination::bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>
@endsection
