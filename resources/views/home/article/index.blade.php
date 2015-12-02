@extends('home.common.layout')
@section('css')

@endsection
@section('js')

@endsection
@section('main')
    <div class="row">
        @foreach($articleList as $article)
            <div class="col-xs-4">
                <div class="panel panel-default">
                	  <div class="panel-body ">
                          <a href="{{ Request::url().'/'.$article->article_id }}"><img class="img-list-cover" src="{{$article->article_cover}}" alt="文章封面"></a>
                	  </div>
                	  <div class="panel-footer">
                          <a href="{{Request::url().'/'.$article->article_id}}}">{{$article->article_title}}</a>
                      </div>
                </div>

            </div>
        @endforeach
    </div>
@endsection