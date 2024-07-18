<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Portal Berita</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="/frontend/css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="/frontend/css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="/frontend/css/responsive.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="/frontend/css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;800&family=Sen:wght@400;700;800&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- header top section start -->
    <div class="header_top_section">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </div>
    <!-- header top section start -->
    <!-- header section start -->
    <div class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo"></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a href="{{ url('/') }}" class="nav-link">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('artikel') }}" class="nav-link">Artikel</a>

                        </li>
                        <li class="nav-item">
                            <a href="{{ url('kategori') }}" class="nav-link">Kategori</a>

                        </li>
                        <li class="nav-item">
                            <?php if (!session('users')): ?>
                            <a href="{{ url('loginakun') }}" class="nav-link">Login</a>
                            <?php else : ?>
                            <a href="{{ url('panel/logout') }}" class="nav-link">Logout</a>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- banner section start -->

        <!-- banner section end -->
    </div>

    @yield('content')

    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="footer_section_2">
                <div class="row">
                    <div class="col-md-4">
                        <h2 class="useful_text">QUICK LINKS</h2>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="{{ url('/') }}">Beranda</a></li>
                                <li><a href="{{ url('artikel') }}">Artikel</a></li>
                                <li><a href="{{ url('kategori') }}">Kategori</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h2 class="useful_text">Alamat</h2>
                        <p class="lorem_text">jln padi unggul sei beraskata</p>
                    </div>

                </div>
            </div>
            <div class="social_icon">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <p class="copyright_text">2024 All Rights Reserved. Design by ❤ </p>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright section end -->
    <!-- Javascript files-->
    <script src="/frontend/js/jquery.min.js"></script>
    <script src="/frontend/js/popper.min.js"></script>
    <script src="/frontend/js/bootstrap.bundle.min.js"></script>
    <script src="/frontend/js/jquery-3.0.0.min.js"></script>
    <script src="/frontend/js/plugin.js"></script>
</body>

</html>
