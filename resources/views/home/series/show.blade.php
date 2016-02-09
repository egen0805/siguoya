@extends('home.common.layout')
@section('css')

@endsection
@section('js')

@endsection
@section('main')
    <div class="row">
        <div class="col-xs-9">
            @if(!empty($series))
                <ul class="list-group">
                    @foreach($series['articleList'] as $article)
                        <li class="list-group-item">
                            <a href="/home/article/{{$article->article_id}}">{{$article->article_title}}</a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="col-xs-3">

        </div>
    </div>
@endsection