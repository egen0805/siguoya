<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{$page_title}}</title>
    <!--关键字-->
    <meta name="keywords" content="{{$page_keyword}}">
    <!--页面描述-->
    <meta name="description" content="{{$page_desc}}">
    <!--使360浏览器通过webkit内核采用极速模式渲染页面-->
    <meta name="renderer" content="webkit">
    <!--CSS Start-->
    <link rel="stylesheet" href="http://apps.bdimg.com/libs/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/editor/css/editormd.min.css" />
    <link rel="stylesheet" href="/css/common/app.css">
    <!--自定义CSS-->
    @yield('css')
    <!--CSS End-->
    <!--JS-->
    <script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/vendor/editor/editormd.min.js"></script>
    <script type="text/javascript" src="/vendor/editor/lib/marked.min.js"></script>
    <script type="text/javascript" src="/vendor/editor/lib/prettify.min.js"></script>
    <script type="text/javascript" src="/js/common/holder.min.js"></script>
    <script type="text/javascript" src="/js/common/app.js"></script>
    <!--自定义JS-->
    @yield('js')
    <!--JS End-->
</head>
<body>
    <div id="header">
        @include('home.common.nav')
    </div>
    <div id="main">
        <div class="container">
            @yield('main')
        </div>
    </div>
    <div id="footer">
        @include('home.common.footer')
    </div>
</body>
</html>