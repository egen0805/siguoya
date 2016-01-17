@extends('home.common.layout')
@section('css')

@endsection
@section('js')

@endsection
@section('main')
    <div class="row">
        <div class="col-xs-12">
            <div class="alert alert-info">
                <a href="#" class="close" data-dismiss="alert">
                    &times;
                </a>
                <p class=""><h3 class="text-danger text-center">jQuery 2.0.3源码的学习与研究</h3></p>
                <h4>为什么学习jQuery源码?</h4>
                <ul>
                    <li>jQuery是轻量级但功能丰富的JavaScript框架</li>
                    <li>跨浏览器 , 通过一些简单易用的API , 轻易实现文档操作、事件处理、动画、Ajax等一系列功能</li>
                    <li>兼具灵活性与易扩展性 , jQuery已经改变了数百万使用JavaScript的从业者</li>
                </ul>
                <p></p>
                <h4>1.x版本的jQuery与2.x版本的jQuery有何区别?</h4>
                <ul>
                    <li>jQuery 1.0于2006年8月发布 , 是该库的第一个稳定版本 , 已经具有了对CSS选择符、事件处理和AJAX交互的稳健支持。</li>
                    <li>jQuery 2.0 Beta 2于2013年3月发布 , jQuery 2.0 不再支持IE 6/7/8 了 , 但是 jQuery 1.9 会继续支持。jQuery 团队将同时支持 jQuery 1.x 和 2.x , 此外1.9 和 2.0 版的 API 也是相同的。</li>
                </ul>
                <h4>jQuery源码学习参考资料</h4>
                <ul>
                    <li><a href="http://jquery.com/">jQuery官网</a></li>
                    <li><a href="http://jquery.miaov.com/">妙味课堂 jQuery 源码分析视频</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xs-9">
            @if(!empty($articleList))
                <ul class="list-group">
                    @foreach($articleList as $article)
                        <li class="list-group-item">
                            <a href="/home/frontend/jquerysource/{{$article->article_id}}" target="_blank">{{$article->article_title}}<span></span></a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="col-xs-3">

        </div>
    </div>
@endsection