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
                    <footer class="sticky-footer bg-white">
                    @include('theme.footer')
                    </footer>
                </div>
            </div>
        </div>
    </div>
</body>
</html>