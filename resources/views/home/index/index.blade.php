@extends('home.common.layout')
@section('css')
    <link rel="stylesheet" href="/css/home/index/index.css">
@endsection()
@section('js')
    <script type="text/javascript" src="/js/home/index/index.js"></script>
@endsection()
@section('main')
    <div class="col-xs-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">最新文章</h3>
            </div>
            @foreach($articlesNew as $article)
            <div class="panel-body padding-none">
                <ul class="list-unstyled">
                    <li>
                        <a href="/home/{{$article->article_main_classify.'/'.$article->article_sub_classify.'/'.$article->article_id}}">
                            <img class="img-responsive" src="{{$article->article_cover}}" alt="文章图片">
                        </a>
                        <p class="text-center">
                            <a href="/home/{{$article->article_main_classify.'/'.$article->article_sub_classify.'/'.$article->article_id}}">
                                {{$article->article_title}}
                            </a>
                        </p>
                    </li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-xs-6">
        <div id="hotArticle" class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">最热文章</h3>
            </div>
            <div class="panel-body panel-body-hot">
                <ul class="list-unstyled">
                    @foreach($articlesHot as $article)
                        <li class="li-hot">
                            <blockquote class="text-danger">
                                <a href="/home/{{$article->article_main_classify.'/'.$article->article_sub_classify.'/'.$article->article_id}}" target="_blank">{{$article->article_title}}</a>
                            </blockquote>
                            <div class="img-out">
                                <a href="/home/{{$article->article_main_classify.'/'.$article->article_sub_classify.'/'.$article->article_id}}" target="_blank">
                                    <img class="img-responsive img-hot pull-left" src="{{$article->article_cover}}" alt="文章图片">
                                </a>
                            </div>
                            <p class="article_content">
                                <?=$article->article_summary?>
                            </p>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xs-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">程序员翻墙必备</h3>
            </div>
            <div class="panel-body padding-none">
                <a href="/home/os/tools/greenvpn" target="_blank"><img src="/img/home/index/greenvpn.jpg " class="img-responsive" alt="greenvpn"></a>
            </div>
            <div class="panel-footer">
                如果你连谷歌都不知道,还能知道什么?
            </div>
        </div>
        {{--<div class="panel panel-default">--}}
            {{--<div class="panel-heading">--}}
                {{--<h3 class="panel-title">迅雷会员账号</h3>--}}
            {{--</div>--}}
            {{--<div class="panel-body padding-none">--}}
                {{--<ul>--}}
                    {{--<li>账号306104228:1<br/> 密码1113773</li>--}}
                    {{--<li>账号306104228:1<br/> 密码1113773</li>--}}
                    {{--<li>账号306104228:1<br/> 密码1113773</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">扫我! 扫我!</h3>
            </div>
            <div class="panel-body padding-none">
                <a href="/home/about/me" target="_blank"><img src="/img/home/index/weixin.jpg" class="img-responsive" alt="个人二维码"></a>
            </div>
            <div class="panel-footer">
                闷骚的二维码颜色,做爱做的事情
            </div>
        </div>
    </div>
@endsection