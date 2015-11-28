@extends('admin.common.layout')
@section('css')
    <link rel="stylesheet" href="/vendor/editor/css/editormd.min.css" />
    <link rel="stylesheet" href="/css/admin/article/create.css" />
@endsection
@section('js')
    <script type="text/javascript" src="/vendor/editor/editormd.js"></script>
    <script type="text/javascript" src="/vendor/uploader/src/dmuploader.js"></script>
    <script type="text/javascript" src="/js/admin/article/edit.js"></script>
@endsection
@section('main')
    <?=Form::open([]) ?>
        <legend id="legend" data-src="{{$article->article_id}}">文章发布</legend>
        <div class="form-group">
            <?=Form::label('articleTitle','文章标题') ?>
            <?=Form::text('articleTitle',$article->article_title,['id'=>'articleTitle','class'=>'form-control'])?>
        </div>
        <div class="form-group">
            <?=Form::label('articleMainClassify','文章主类') ?>
            <?=Form::select('articleMainClassify',$classifyList,null,['class'=>'form-control'])?>
        </div>
        <div class="form-group">
            <?=Form::label('articleSubClassify','文章子类') ?>
            <?=Form::select('articleSubClassify',[],null,['class'=>'form-control'])?>
        </div>
        <div class="form-group">
            <?=Form::label('articleTitle','文章封面') ?>
            <?=Form::hidden('articleCover',$article->article_cover,['id'=>'articleCover'])?>
            <img src="{{$article->article_cover}}" id="coverPreview" class="img-responsive img-list-cover" data-src="holder.js/320x180?theme=sky" alt="文章配图">
        </div>
        <div id="uploaderArea" class="form-group">
                <span class="btn btn-info btn-file">
                    封面上传 <input id="file" name="file" type="file">
                </span>
        </div>
        <div class="form-group">
            <?=Form::label('articleTitle','文章摘要') ?>
            <?=Form::textarea('articleSummary',$article->article_summary,['id'=>'articleSummary','class'=>'form-control'])?>
        </div>
        <div class="form-group">
            <?=Form::label('articleTitle','文章详情') ?>
            <div id="editormd">
                <textarea style="display:none;">{{$article->article_content}}</textarea>
            </div>
        </div>
        <div class="form-group">
            <?=Form::label('articleTitle','文章出处') ?>
            <?=Form::text('articleOriginUrl',$article->article_origin_url,['id'=>'articleOriginUrl','class'=>'form-control'])?>
        </div>
        <?=Form::button('确定发布',['id'=>'submit','class'=>'btn btn-primary btn-block'])?>
    <?=Form::close() ?>
@stop

