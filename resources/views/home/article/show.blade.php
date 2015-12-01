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
            @if($article->article_origin_url)
                <div class="well text-info">
                    <label class="text-danger">文章来源:</label>
                    <p><a id="articleOriginSource" href="{{$article->article_origin_url}}">{{$article->article_origin_url}}</a></p>
                </div>
            @endif
        </div>
        <div class="col-xs-3">
            暂时没想好放啥
        </div>
    </div>
    <div class="row">
        <textarea class="hidden" name="" id="mdContainer" cols="30" rows="10">{{$article->article_content}}</textarea>
    </div>
@endsection