@extends('home.common.layout')
@section('css')

@endsection
@section('js')

@endsection
@section('main')
    <div class="row">
        <div class="col-xs-9">
            <h2 class="text-center">{{$article->article_title}}</h2>
            <div id="article_mark">
                <ul class="list-unstyled">
                    <li>浏览量:<span class="text-info">{{$article->article_view_count}}</span></li>
                    <li>发布时间:<span class="text-info">{{$article->created_at}}</span></li>
                    <li>发布人:<span class="text-info"><a href="/home/about/me">思过崖</a></span></li>
                </ul>
            </div>
            <hr/>
            <div id="markdown"></div>
            <div class="well text-info">
            @if(count($article->article_origin_url)==2)
                <label class="text-danger">文章来源:</label>
                <p>本文转载自{{$article->article_origin_url[0]}},原文链接为<a href="{{$article->article_origin_url[1]}}">{{$article->article_origin_url[1]}}</a></p>
            @else
                <label class="text-danger">文章由<a href="/home/about/me">思过崖</a>原创,转载时请在文章底部添加如下内容</label>
                <p>本文转载自思过崖的个人博客,原文链接为<a href="{{Request::url()}}">{{Request::url()}}</a></p>
            @endif
        </div></div>
        <div class="col-xs-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">相关推荐</h3>
                </div>
                @foreach($referArticleList as $article)
                    <div class="panel-body padding-none">
                        <ul class="list-unstyled">
                            <li>
                                <a href="/home/{{$article->article_main_classify.'/'.$article->article_sub_classify.'/'.$article->article_id}}">
                                    <img class="img-responsive" src="{{$article->article_cover->file_url}}" alt="{{$article->article_title}}封面">
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
    </div>
    <div class="row">
        <textarea class="hidden" name="" id="mdContainer" cols="30" rows="10">{{$article->article_content}}</textarea>
    </div>
@endsection