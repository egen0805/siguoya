<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{preg_match('/\d/',Request::url())?(preg_match('/series/',Request::url())?$series->series_name:$article->article_title.' - 思过崖'):$page_title}}</title>
    <!--关键字-->
    <meta name="keywords" content="{{preg_match('/\d/',Request::url())?(preg_match('/series/',Request::url())?$series->series_name:$article->article_keywords):$page_keyword}}">
    <!--页面描述-->
    <meta name="description" content="{{preg_match('/\d/',Request::url())?(preg_match('/series/',Request::url())?$series->series_name:$article->article_summary):$page_desc}}">
    <!--使360浏览器通过webkit内核采用极速模式渲染页面-->
    <meta name="renderer" content="webkit">
    <!--响应式,等比例缩放页面-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--用于Ajax,防止跨站攻击-->
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--CSS Start-->
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/vendor/editor/css/editormd.min.css" />
    <link rel="stylesheet" href="/css/siguoya.min.css" />
    @yield('css')
    <!--CSS End-->
    <!--JS Start-->
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/vendor/editor/editormd.min.js"></script>
    <script type="text/javascript" src="/vendor/editor/lib/marked.min.js"></script>
    <script type="text/javascript" src="/vendor/editor/lib/prettify.min.js"></script>
    <script type="text/javascript" src="/js/holder.min.js"></script>
    <!-- HTML5 Shim 和 Respond.js 用于让 IE8 支持 HTML5元素和媒体查询 -->
    <!-- 注意： 如果通过 file://  引入 Respond.js 文件，则该文件无法起效果 -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/js/siguoya.min.js"></script>
    @yield('js')
    <!--JS End-->
</head>
<body id="{{$page_name}}" data-token="{{ csrf_token() }}">
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