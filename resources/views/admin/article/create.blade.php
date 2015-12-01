@extends('admin.common.layout')
@section('css')
    <link rel="stylesheet" href="/vendor/editor/css/editormd.min.css" />
    <link rel="stylesheet" href="/css/admin/article/create.css" />
@endsection
@section('js')
    <script type="text/javascript" src="/vendor/editor/editormd.js"></script>
    <script type="text/javascript" src="/vendor/uploader/src/dmuploader.js"></script>
    <script type="text/javascript" src="/js/admin/article/create.js"></script>
@endsection
@section('main')
    <?=Form::open([]) ?>
        <legend>文章发布</legend>
        <div class="form-group">
            <?=Form::label('articleTitle','文章标题') ?>
            <?=Form::text('articleTitle',null,['id'=>'articleTitle','class'=>'form-control'])?>
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
            <?=Form::hidden('articleCover',null,['id'=>'articleCover'])?>
            <img id="coverPreview" class="form-control" data-src="holder.js/320x180?theme=sky" alt="文章配图">
        </div>
        <div id="uploaderArea" class="form-group">
            <span class="btn btn-info btn-file">
                封面上传 <input id="file" name="file" type="file">
            </span>
        </div>
        <div class="form-group">
            <?=Form::label('articleTitle','文章摘要') ?>
            <?=Form::textarea('articleSummary',null,['id'=>'articleSummary','class'=>'form-control'])?>
        </div>
        <div class="form-group">
            <?=Form::label('articleTitle','文章详情') ?>
            <div id="editormd">
                <textarea style="display:none;"></textarea>
            </div>
        </div>
        <div class="form-group">
            <?=Form::label('articleTags','文章标签[使用逗号隔开]') ?>
            <?=Form::textarea('articleTags',null,['id'=>'articleTags','class'=>'form-control'])?>
        </div>
        <div class="form-group">
            <?=Form::label('articleTitle','文章来源[作者,链接]') ?>
            <?=Form::text('articleOriginUrl',null,['class'=>'form-control','id'=>'articleOriginUrl'])?>
        </div>
        <?=Form::button('确定发布',['id'=>'submit','class'=>'btn btn-primary btn-block'])?>
    <?=Form::close() ?>
@stop

