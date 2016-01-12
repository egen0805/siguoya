<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>后台管理-思过崖</title>
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    @yield('css')
    <link rel="stylesheet" href="/css/siguoya.min.css">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/js/holder.min.js"></script>
    @yield('js')
    <script type="text/javascript" src="/js/siguoya.min.js"></script>
</head>
<body>
    <div id="header">
        @include('admin.common.nav')
    </div>
    <div id="main">
        <div class="container">
            @yield('main')
        </div>
    </div>
    <div id="footer">
        @yield('footer')
    </div>
</body>
</html>