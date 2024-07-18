<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Akun</title>
    <link href="/admin/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
</head>

<body class="h-100">

    <div class="registration-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                    <div class="card registration-form mb-0">
                        <div class="card-body p-5">
                            <h4 class="text-center">Daftar Akun</h4>
                            <form class="mt-4" method="post" action="{{ url('daftarsimpan') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-3">
                                    <label class="col-sm-12 col-md-4 col-form-label">Nama</label>
                                    <div class="col-sm-12 col-md-8">
                                        <input type="text" class="form-control" name="nama" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-sm-12 col-md-4 col-form-label">Email</label>
                                    <div class="col-sm-12 col-md-8">
                                        <input type="email" class="form-control" name="email" required>
                                    </div>
                                </div>
                                <div class="form-group row mb-3">
                                    <label class="col-sm-12 col-md-4 col-form-label">Password</label>
                                    <div class="col-sm-12 col-md-8">
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success float-end" name="simpan">Daftar</button>
                            </form>
                            <div class="text-center mt-3">
                                <a href="{{ url('loginakun') }}">Sudah punya akun? Login sekarang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="/admin/plugins/common/common.min.js"></script>
    <script src="/admin/js/custom.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <script>
        // Display success/error messages
        $(function() {
            @if ($message = session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: '{{ session('success') }}'
                });
            @endif

            @if ($message = session('error'))
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: '{{ session('error') }}'
                });
            @endif
        });
    </script>
</body>

</html>
