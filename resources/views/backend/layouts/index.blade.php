<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Aris Capital - Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('backend/assets/img/favicon-white.png') }}" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('backend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet" />
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
</head>

<style>
    .sidebar-nav .nav-item.active a {
        color: black;
    }

    .sidebar-nav .nav-item.active i {
        font-size: 16px;
        margin-right: 10px;
        color: #000;
    }
</style>


<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="{{url('/')}}" class="logo d-flex align-items-center">
                <span class="d-none d-lg-block"><img src="{{asset('backend/assets/img/aris-logo.png')}}" /></span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->



                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <span class="d-none d-md-block dropdown-toggle ps-2">Admin</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>{{ Auth::user()->name }}</h6>
                            <span>{{ Auth::user()->email }}</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                                    <i class="bi bi-box-arrow-right"></i>
                                    <span>Sign Out</span>
                                </a>
                            </form>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->



    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->

    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">

            {{--
            <!-- Dashboard Link -->
            <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
            </li>
            --}}

            <!-- Teams Link -->
            <li class="nav-item {{ request()->is('team*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('team.index') }}">
                    <i class="bi bi-diagram-3"></i>
                    <span>Teams</span>
                </a>
            </li>

            <!-- Board Link -->
            <li class="nav-item {{ request()->is('board*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('board.index') }}">
                    <i class="bi bi-people"></i>
                    <span>Board</span>
                </a>
            </li>

            <!-- Location Link -->
            <li class="nav-item {{ request()->is('location*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('location.index') }}">
                    <i class="bi bi-map"></i> <!-- Using map icon for location -->
                    <span>Location</span>
                </a>
            </li>

            <!-- Media Link -->
            <li class="nav-item {{ request()->is('media*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('media.index') }}">
                    <i class="bi bi-camera-video"></i> <!-- Using camera icon for media -->
                    <span>Media</span>
                </a>
            </li>

            <li class="nav-item {{ request()->is('important-information.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('important-information.index') }}">
                    <i class="bi bi-camera-video"></i> <!-- Using camera icon for media -->
                    <span>important-information</span>
                </a>
            </li>

        </ul>
    </aside><!-- End Sidebar -->


    <main id="main" class="main">
        <div class="pagetitle">
            <h1>@yield('title')</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">@yield('title')</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        @yield('contents')

        <!-- ======= Footer ======= -->
        {{--<footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright 2024 | <strong><span>Arias Capital</span></strong> | All Rights Reserved
        </div>
        <div class="credits">

            Designed by <a href="https://esytes.com/" target="_blank">eSytes</a>
        </div>
    </footer>--}}
        <!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        <!-- Vendor JS Files -->
        <script src="{{ asset('backend/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/chart.js/chart.umd.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/echarts/echarts.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/quill/quill.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('backend/assets/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('backend/assets/js/main.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        @if($errors->any())
        @foreach($errors->all() as $error)
        <script>
            toastr.error('{{ $error }}');
        </script>
        @endforeach
        @endif



        @if(session('success'))
        <script>
            toastr.success("{{ session('success')}}");
        </script>
        @endif



</body>

</html>