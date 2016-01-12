@foreach($articlesNew as $article)
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