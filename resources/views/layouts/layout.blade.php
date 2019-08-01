<!DOCTYPE html>
<html lang="en">
<head>
    @include('theme.head')
</head>
<body id="page-top">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div id="wrapper">
    @include('theme.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('theme.header')
                <div class="container-fluid">
                    <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                    @section('content')
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
    <script src="{{url('style/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('style/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('style/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{url('style/js/sb-admin-2.min.js')}}"></script>
    <script src="{{url('style/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{url('style/js/demo/chart-area-demo.js')}}"></script>
    <script src="{{url('style/js/demo/chart-pie-demo.js')}}"></script>
</body>
</html>