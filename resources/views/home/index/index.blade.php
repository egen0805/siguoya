@extends('home.common.layout')
@section('main')
    <div id="new_list" class="col-sm-3 col-xs-12">
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
    <div id="hot_list" class="col-xs-6 hidden-xs">
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
    <div id="other_list" class="col-xs-3 hidden-xs">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">写代码这么好玩的事还能挣钱</h3>
            </div>
            <div class="panel-body padding-none">
                <embed width="100%" height="200px" src="http://player.youku.com/player.php/sid/XMTQ0OTUxNjc5Ng==/v.swf" allowFullScreen="true" quality="high"  align="middle" allowScriptAccess="always" type="application/x-shockwave-flash"></embed>
            </div>
            <div class="panel-footer">
                <span class="text-info">我爱这个世界~~siguoya.name</span>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">程序员翻墙必备</h3>
            </div>
            <div class="panel-body padding-none">
                <a href="/home/os/tools/greenvpn" target="_blank"><img src="/img/home/index/greenvpn.jpg " class="img-responsive" alt="greenvpn"></a>
            </div>
            <div class="panel-footer">
                <span class="text-info">程序员的梦想应该是星辰大海</span>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">扫我! 扫我!</h3>
            </div>
            <div class="panel-body padding-none">
                <a href="/home/about/me" target="_blank"><img src="/img/home/index/weixin.jpg" class="img-responsive" alt="个人二维码"></a>
            </div>
            <div class="panel-footer">
                <span class="text-info">闷骚的二维码颜色,做爱做的事情</span>
            </div>
        </div>
        <div class="panel panel-default panel-list-group">
            <div class="panel panel-heading">
                <h3 class="panel-title">提供网站免费搭建服务</h3>
            </div>
            <div class="panel panel-body padding-none">
                <a href="http://www.aliyun.com/" target="_blank">
                    <img class="img-responsive" src="/img/home/index/cloud.jpg" alt="阿里云">
                </a>
            </div>
            <div class="panel panel-footer">
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <h5 class="list-group-item-heading">
                            使用国内最好的阿里云服务器
                        </h5>
                        <p class="list-group-item-text">
                            基于最流行的LNMP开发环境
                        </p>
                    </a>
                    <a href="#" class="list-group-item">
                        <h5 class="list-group-item-heading">
                            域名注册在阿里旗下的万网
                        </h5>
                        <p class="list-group-item-text">快速解析,备案无后顾之忧</p>
                    </a>
                    <a href="#" class="list-group-item">
                        <h5 class="list-group-item-heading">
                            长期低成本7x24小时的服务器维护
                        </h5>
                        <p class="list-group-item-text">运维交给我,您只管安心地去运营</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">友情链接</h3>
            </div>
            <div class="panel-body">
                <ul class="list-unstyled">
                    <li><a href="http://irudder.me/wpblog/">艾文逗</a></li>
                </ul>
            </div>
        </div>
    </div>
@endsection