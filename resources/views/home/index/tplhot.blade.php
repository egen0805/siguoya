@foreach($articlesHot as $article)
    <li class="li-hot">
        <blockquote class="text-danger">
            <a href="/home/{{$article->article_main_classify.'/'.$article->article_sub_classify.'/'.$article->article_id}}" target="_blank">{{$article->article_title}}</a>
        </blockquote>
        <div class="img-out">
            <a href="/home/{{$article->article_main_classify.'/'.$article->article_sub_classify.'/'.$article->article_id}}" target="_blank">
                <img class="img-responsive img-hot pull-left" src="{{$article->article_cover->file_url}}" alt="文章图片">
            </a>
        </div>
        <p class="article_content">
            <?=$article->article_summary?>
        </p>
    </li>
@endforeach