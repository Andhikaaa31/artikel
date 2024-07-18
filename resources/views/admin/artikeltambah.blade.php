@extends('admin/layout')
@section('content')
    <div class="content-body">
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-12">
                    <h3 class="mb-3">{{ $title }}</h3>
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{ url('panel/artikeltambahsimpan') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Judul</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input type="text" class="form-control" name="judul" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Kategori</label>
                                    <div class="col-sm-12 col-md-10">
                                        <select class="form-control" name="kategori" required>
                                            <option value="">Pilih kategori</option>
                                            @foreach ($kategori as $category)
                                                <option value="{{ $category->kategori }}">{{ $category->kategori }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Isi</label>
                                    <div class="col-sm-12 col-md-10">
                                        <textarea class="form-control" rows="5" id="isiartikel" name="isiartikel" required></textarea>
                                        <script>
                                            CKEDITOR.replace('isiartikel');
                                        </script>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Tag</label>
                                    <div class="col-sm-12 col-md-10">
                                        <div class="border p-3" style="max-height: 200px; overflow-y: auto;">
                                            @foreach ($tags as $tag)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="tag[]"
                                                        value="{{ $tag->tag }}" id="tag-{{ $tag->tag }}">
                                                    <label class="form-check-label" for="tag-{{ $tag->tag }}">
                                                        {{ $tag->tag }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Tanggal</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input type="date" class="form-control" name="tanggal" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success pull-right" name="simpan">Simpan</button>
                                <br><br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
