<!DOCTYPE html>
<html lang="en">
<head>
    @include('theme.head')
</head>
<body id="page-top">
    <div id="wrapper">
    @include('theme.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('theme.header')
                <div class="container-fluid">
                    @yield('content')
                    <footer class="sticky-footer bg-white">
                    @include('theme.footer')
                    </footer>
                </div>
            </div>
        </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-aungle-up"></i>
    </a>
    <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{url('js/sb-admin-2.min.js')}}"></script>
    <script src="{{url('vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{url('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{url('js/demo/chart-pie-demo.js')}}"></script>
</body>
</html>