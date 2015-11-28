@extends('home.common.layout')
@section('css')

@endsection
@section('js')

@endsection
@section('main')
    <div class="row">
        <div class="col-xs-9">
            <div id="markdown"></div>
            @if($article->article_origin_url)
                <div class="well text-info">
                    <label>原文链接:</label>
                    <p><a href="{{$article->article_origin_url}}">{{$article->article_origin_url}}</a></p>
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