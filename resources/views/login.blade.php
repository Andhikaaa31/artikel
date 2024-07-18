<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Akun</title>
    <link href="/admin/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
</head>

<body class="h-100">


    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center h-100">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                    <div class="card login-form mb-0">
                        <div class="card-body p-5">
                            <h4 class="text-center">Login Akun</h4>
                            <form class="mt-4" method="post" action="{{ url('logincek') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <div class="input-group">
                                        <input class="form-control password" id="password" type="password"
                                            name="password" autocomplete="off" required />

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Login</button>
                            </form>
                            <div class="text-center mt-3">
                                <a href="{{ 'daftar' }}">Belum punya akun? Daftar</a><br>
                                <a href="{{ '/' }}">Kembali ke beranda</a>
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

        feather.replace();
        $(".togglePassword").click(function() {
            const passwordInput = $(this).parent().prev(".password");
            const type = passwordInput.attr("type");
            passwordInput.attr("type", type === "password" ? "text" : "password");
            $(this).find("i").toggleClass("fa-eye fa-eye-slash");
        });
    </script>
</body>

</html>
