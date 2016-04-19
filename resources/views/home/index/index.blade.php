@extends('home.common.layout')
@section('css')
    <style type="text/css">
        .panel-footer{
            padding: 0 15px;
            height: 50px;
        }
    </style>
@endsection
@section('main')
    <div class="col-xs-12 col-md-9">
        <div class="col-xs-12">
            <div class="alert alert-info">
                <a href="#" class="close" data-dismiss="alert">
                    &times;
                </a>
                <h3 class="text-danger">你想成为什么样的程序猿?</h3>
                <ul>
                    <li><span class="text-danger">90%的程序猿属于三流公司招聘的程序猿：</span>日复一日的写业务逻辑，修改bug，学当下最流行的框架，不断巩固实践，直到能够单独带领团队，成为所谓的全栈式开发。
                       以为代码就是一切，产品就是一切，不断的摸爬滚打，若干年后达到这个层次的金字塔顶端，可是依然摆脱不了最底层的码农称谓。
                       你所看到的不是全世界，其实是最底层。
                    </li>
                    <li>
                       <span class="text-danger">7%的程序猿是二流公司的架构师或者cto：</span>凡事都要刨根究底，拿到一个框架就要研究源代码，看看效率如何，怎么改更好。这种人往往积极性很高，逻辑思维强，往往是很多公司的技术总监，对每一行代码都要想想在机器上发生的事情。他们工作在it的前沿，最新资源，消息往往是最早知道的！
                    </li>
                    <li><span class="text-danger">2.9%的程序猿是一流公司招聘的核心研发人员，国际标准化组织会员：</span>真正意义上的软件研发，从无到有的过程，他们往往是各大框架的制定者，各种标准的参与者。</li>
                    <li><span class="text-danger">最后那0.1%的程序猿更多的是天才，能够发明新东西的人：</span>c语言之父，图灵等等。</li>
                </ul>
            </div>
        </div>
        <div id="new_list" class="col-xs-12 col-sm-4">
            <div id="append_new" class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">最新文章</h3>
                </div>
                @foreach($articlesNew as $article)
                    <div class="panel-body padding-none">
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{'/home/article/'.$article->article_id}}">
                                    <img class="img-responsive" src="{{$article->article_cover->file_url}}" alt="{{$article->article_title}}封面">
                                </a>
                                <p class="text-center">
                                    <a href="{{'/home/article/'.$article->article_id}}">
                                        {{$article->article_title}}
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
        <div id="hot_list" class="hidden-xs col-sm-8">
            <div id="hotArticle" class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">最热文章</h3>
                </div>
                <div class="panel-body panel-body-hot">
                    <ul id="append_hot" class="list-unstyled">
                        @foreach($articlesHot as $article)
                            <li class="li-hot">
                                <blockquote class="text-danger">
                                    <a href="{{'/home/article/'.$article->article_id}}" target="_blank">{{$article->article_title}}</a>
                                </blockquote>
                                <div class="img-out">
                                    <a href="{{'/home/article/'.$article->article_id}}" target="_blank">
                                        <img class="img-responsive img-hot pull-left" src="{{$article->article_cover->file_url}}" alt="文章图片">
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
    </div>
    <div id="other_list" class="col-xs-12 col-md-3">
        <div class="panel panel-warning">
            <div class="panel-heading">
                <h3 class="panel-title">写代码这么好玩的事还能挣钱</h3>
            </div>
            <div class="panel-body padding-none">
                <embed title="思过崖的の视频" width="100%" height="200px" src="http://player.youku.com/player.php/sid/XMTQ0OTUxNjc5Ng==/v.swf" allowFullScreen="true" quality="high"  align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
            </div>
            <div class="panel-footer">
                <p class="text-center">
                    <a href="http://v.youku.com/v_show/id_XMTQ0OTUxNjc5Ng==.html?firsttime=0">
                        思过崖深爱の这个世界
                    </a>
                </p>
            </div>
        </div>
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h3 class="panel-title">程序猿翻墙必备</h3>
            </div>
            <div class="panel-body padding-none">
                <a href="/home/os/tools/greenvpn" target="_blank"><img title="greenvpn" src="/img/home/index/greenvpn.jpg " class="img-responsive" alt="greenvpn"></a>
            </div>
            <div class="panel-footer">
                <p class="text-center">
                    <a href="/home/os/tools/greenvpn">
                        程序猿的梦想应该是星辰大海
                    </a>
                </p>
                {{--<span class="text-info"></span>--}}
            </div>
        </div>
        {{--<div class="panel panel-info panel-list-group">--}}
            {{--<div class="panel panel-heading">--}}
                {{--<h3 class="panel-title">提供网站免费搭建服务</h3>--}}
            {{--</div>--}}
            {{--<div class="panel panel-body padding-none">--}}
                {{--<a href="http://www.aliyun.com/" target="_blank">--}}
                    {{--<img class="img-responsive" src="/img/home/index/cloud.jpg" alt="阿里云">--}}
                {{--</a>--}}
            {{--</div>--}}
            {{--<div class="panel panel-footer">--}}
                {{--<div class="list-group">--}}
                    {{--<a href="#" class="list-group-item">--}}
                        {{--<h5 class="list-group-item-heading">--}}
                            {{--使用国内最好的阿里云服务器--}}
                        {{--</h5>--}}
                        {{--<p class="list-group-item-text">--}}
                            {{--基于最流行的LNMP开发环境--}}
                        {{--</p>--}}
                    {{--</a>--}}
                    {{--<a href="#" class="list-group-item">--}}
                        {{--<h5 class="list-group-item-heading">--}}
                            {{--域名注册在阿里旗下的万网--}}
                        {{--</h5>--}}
                        {{--<p class="list-group-item-text">快速解析,备案无后顾之忧</p>--}}
                    {{--</a>--}}
                    {{--<a href="#" class="list-group-item">--}}
                        {{--<h5 class="list-group-item-heading">--}}
                            {{--长期低成本7x24小时的服务器维护--}}
                        {{--</h5>--}}
                        {{--<p class="list-group-item-text">运维交给我,您只管安心地去运营</p>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">系列文章</h3>
            </div>
            @foreach($seriesArticle as $series)
                <div class="panel-body padding-none">
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{'/home/series/'.$series->series_id}}">
                                <img class="img-responsive" src="{{$series->series_cover->file_url}}" alt="{{$series->series_name}}封面">
                            </a>
                            <p class="text-center">
                                <a href="{{'/home/series/'.$series->series_id}}">
                                    {{$series->series_name}}
                                </a>
                            </p>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">思过崖の微信</h3>
            </div>
            <div class="panel-body padding-none">
                <a href="/home/about/me" target="_blank"><img src="/img/home/index/weixin.jpg" title="思过崖の微信" class="img-responsive" alt="思过崖&曾庆权的微信"></a>
            </div>
            <div class="panel-footer">
                <p class="text-center">
                    <a href="/home/about/me">
                        我有故事，你有酒吗？
                    </a>
                </p>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">思过崖の知乎</h3>
            </div>
            <div class="panel-body padding-none">
                <a href="https://www.zhihu.com/people/siguoya" target="_blank"><img title="思过崖の知乎" src="/img/home/index/zhihu.png" class="img-responsive" alt="思过崖&曾庆权の知乎"></a>
            </div>
            <div class="panel-footer">
                <p class="text-center">
                    <a href="https://www.zhihu.com/people/siguoya">
                        关注编程与互联网产品
                    </a>
                </p>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">思过崖のGithub</h3>
            </div>
            <div class="panel-body padding-none">
                <a href="https://github.com/zy108830" target="_blank"><img title="思过崖のGithub" src="/img/home/index/github.jpg" class="img-responsive" alt="思过崖&曾庆权のGithub"></a>
            </div>
            <div class="panel-footer">
                <p class="text-center">
                    <a href="https://github.com/zy108830">
                        Gayhub，男同交友中心
                    </a>
                </p>
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">友情链接</h3>
            </div>
            <div class="panel-body" style="padding: 0 15px;">
                <ul class="list-unstyled">
                    <li>
                        <p><a target="_blank" href="http://irudder.me/wpblog/">艾文逗</a></p>
                        <p><a target="_blank" href="http://demonzone.cn/">蝶梦小筑</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection