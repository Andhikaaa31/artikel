<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- SB Admin CSS -->
    <link href="/backend/css/sb-admin-2.min.css" rel="stylesheet">
    <!-- SweetAlert CSS -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    <!-- CKEditor -->
    <script src="/ckeditor/ckeditor.js"></script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon"></div>
                <div class="sidebar-brand-text mx-3">Portal Berita</div>
            </a>
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('panel/dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            @if (session('users')->level == 'Admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('panel/artikel') }}">
                        <i class="fas fa-fw fa-newspaper"></i>
                        <span>Artikel</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('panel/kategori') }}">
                        <i class="fas fa-fw fa-tags"></i>
                        <span>Kategori</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('panel/tag') }}">
                        <i class="fas fa-fw fa-tag"></i>
                        <span>Tag</span>
                    </a>
                </li>
            @elseif(session('users')->level == 'Warga')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('panel/pengajuantambah') }}">
                        <i class="fas fa-fw fa-file-alt"></i>
                        <span>Pengajuan Surat</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('panel/pengajuansyarat') }}">
                        <i class="fas fa-fw fa-file-signature"></i>
                        <span>Syarat Pengajuan Surat</span>
                    </a>
                </li>
            @elseif(session('users')->level == 'Kepala Desa')
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('panel/kegiatandaftar') }}">
                        <i class="fas fa-fw fa-calendar-alt"></i>
                        <span>Kegiatan</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('panel/pembangunandaftar') }}">
                        <i class="fas fa-fw fa-building"></i>
                        <span>Pembangunan</span>
                    </a>
                </li>
            @endif
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('panel/logout') }}">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('panel/profil') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Ubah Profil</span>
                </a>
            </li>
        </ul>
        <!-- End Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('foto/user.png') }}" class="img-profile rounded-circle"
                                    height="40" width="40">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="{{ url('panel/profil') }}">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ url('panel/logout') }}">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
                <!-- End Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- End Page Content -->
            </div>
            <!-- End Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>© 2023 Portal Berita</span>
                    </div>
                </div>
            </footer>
            <!-- End Footer -->
        </div>
        <!-- End Content Wrapper -->
    </div>
    <!-- End Page Wrapper -->

    <!-- Scripts -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- SB Admin JS -->
    <script src="/backend/js/sb-admin-2.min.js"></script>
    <!-- SweetAlert JS -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.dataTable').DataTable();
        });
    </script>
    @yield('script')
</body>

</html>
