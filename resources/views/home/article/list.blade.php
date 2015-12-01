@extends('home.common.layout')
@section('css')

@endsection
@section('js')

@endsection
@section('main')
    <div class="row">
        <div class="col-xs-9">
            <ul class="list-group">
                @foreach($articleList as $article)
                    <li class="list-group-item">
                        <a href="/home/arithmetic/javascript/dataselect/{{$article->article_id}}" target="_blank">{{$article->article_title}} <span></span></a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="col-xs-3"></div>
    </div>
@endsection