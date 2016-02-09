@extends('home.common.layout')
@section('css')

@endsection
@section('js')

@endsection
@section('main')
    <div class="row">
        @foreach($seriesList as $series)
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body ">
                        <a href="{{ '/home/series/'.$series->series_id }}">
                            <img class="img-list-cover" src="{{ $series->series_cover->file_url }}" alt="{{ $series->series_name }}文章封面">
                        </a>
                    </div>
                    <div class="panel-footer">
                        <a href="{{ '/home/series/'.$series->series_id }}">[系列文章]{{ $series->series_name }}</a>
                    </div>
                </div>
            </div>
        @endforeach
        @foreach($articleList as $article)
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body ">
                      <a href="{{'/home/article/'.$article->article_id }}">
                          <img class="img-list-cover" src="{{ $article->article_cover->file_url }}" alt="{{ $article->article_title }}文章封面">
                      </a>
                    </div>
                    <div class="panel-footer">
                      <a href="{{ '/home/article/'.$article->article_id }}">{{ $article->article_title }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection