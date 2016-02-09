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
                    <?php $count=0; ?>
                    @foreach($series['articleList'] as $article)
                        <li class="list-group-item">
                            <a href="/home/article/{{$article->article_id}}">{{++$count.'.'}}{{$article->article_title}}</a>
                            <span class="pull-right text-muted">浏览量:{{$article->article_view_count}}</span>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
        <div class="col-xs-3">

        </div>
    </div>
@endsection