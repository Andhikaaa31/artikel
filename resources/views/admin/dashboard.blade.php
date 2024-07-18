@extends('admin/layout')
@section('content')
    <div class="container-fluid mt-3">
        <h3>{{ $title }}</h3>
        <h5 class="mb-3">Website Portal Berita</h5>

        <div class="row">
            @if (session('users')->level == 'Admin' || session('users')->level == 'Kepala Desa')
                <div class="col-md-4">
                    <a href="{{ url('panel/artikel') }}">
                        <div class="card text-white bg-primary mb-3">
                            <div class="card-body">
                                <h3 class="card-title">Jumlah Artikel</h3>
                                <h2>{{ $jumlahartikel }}</h2>
                                <span class="float-right"><i class="fas fa-newspaper fa-2x"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ url('panel/kategori') }}">
                        <div class="card text-white bg-success mb-3">
                            <div class="card-body">
                                <h3 class="card-title">Jumlah Kategori</h3>
                                <h2>{{ $jumlahkategori }}</h2>
                                <span class="float-right"><i class="fas fa-tags fa-2x"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{ url('panel/tag') }}">
                        <div class="card text-white bg-warning mb-3">
                            <div class="card-body">
                                <h3 class="card-title">Jumlah Tag</h3>
                                <h2>{{ $jumlahtag }}</h2>
                                <span class="float-right"><i class="fas fa-tag fa-2x"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
            @endif
            @if (session('users')->level == 'Warga')
                <!-- Additional content for Warga can go here -->
            @endif
        </div>
    </div>
@endsection
