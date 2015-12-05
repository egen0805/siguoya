<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{$page_title}}</title>
    <!--关键字-->
    <meta name="keywords" content="{{isset($article)?$article->article_keywords:$page_keyword}}">
    <!--页面描述-->
    <meta name="description" content="{{isset($article)?$article->article_summary:$page_desc}}">
    <!--使360浏览器通过webkit内核采用极速模式渲染页面-->
    <meta name="renderer" content="webkit">
    <!--CSS Start-->
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/vendor/editor/css/editormd.min.css" />
    <!--自定义CSS-->
    @yield('css')
    <!--CSS End-->
    <link rel="stylesheet" href="/css/app.min.css" />
    <!--JS-->
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/vendor/editor/editormd.min.js"></script>
    <script type="text/javascript" src="/vendor/editor/lib/marked.min.js"></script>
    <script type="text/javascript" src="/vendor/editor/lib/prettify.min.js"></script>
    <script type="text/javascript" src="/js/holder.min.js"></script>
    <!--自定义JS-->
    @yield('js')
    <!--JS End-->
    <script type="text/javascript" src="/js/app.min.js"></script>
</head>
<body id="{{$page_name}}">
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