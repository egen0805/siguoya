<?=Form::open([]) ?>
<legend id="legend" data-src="{{isset($article)?$article->article_id:null}}">文章发布</legend>
<div class="form-group">
    <?=Form::label('articleTitle','文章标题') ?>
    <?=Form::text('articleTitle',isset($article)?$article->article_title:null,['id'=>'articleTitle','class'=>'form-control'])?>
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
    <?=Form::hidden('articleCover',is_null($article->article_cover)?'':$article->article_cover->file_url,['id'=>'articleCover'])?>
    <img src="{{is_null($article->article_cover)?'':$article->article_cover->file_url}}" id="coverPreview"
            class="img-responsive img-list-cover"
            data-src="holder.js/320x180?theme=sky"
            alt="文章配图">
</div>
<div id="uploaderArea" class="form-group">
    <span class="btn btn-info btn-file">
        封面上传 <input id="file" name="file" type="file">
    </span>
</div>
<div class="row">
    <div class="col-xs-6">
        <div class="form-group">
            <?=Form::label('articleTitle','文章摘要') ?>
            <?=Form::textarea('articleSummary',isset($article)?$article->article_summary:null,['id'=>'articleSummary','class'=>'form-control'])?>
        </div>
    </div>
    <div class="col-xs-6">
        <div class="form-group">
            <?=Form::label('articleTags','文章标签') ?>
            <?=Form::textarea('articleTags',isset($article)?$article->article_tags:null,['id'=>'articleTags','class'=>'form-control'])?>
        </div>
    </div>
</div>
<div class="form-group">
    <?=Form::label('articleTitle','文章详情') ?>
    <div id="editormd">
        <textarea style="display:none;">{{isset($article)?$article->article_content:null}}</textarea>
    </div>
</div>
<div class="row">
    <div class="col-xs-6">
        <div class="form-group">
            <?=Form::label('articleKeywords','关键字[使用逗号隔开]') ?>
            <?=Form::text('articleKeywords',isset($article)?$article->article_keywords:null,['class'=>'form-control','id'=>'articleKeywords'])?>
        </div>
    </div>
    <div class="col-xs-6">
        <div class="form-group">
            <?=Form::label('articleTitle','文章出处') ?>
            <?=Form::text('articleOriginUrl',isset($article) && count($article->article_origin_url)==2?$article->article_origin_url[0].','.$article->article_origin_url[1]:null,['id'=>'articleOriginUrl','class'=>'form-control'])?>
        </div>
    </div>
</div>
<?=Form::button('确定发布',['id'=>'submit','class'=>'btn btn-primary btn-block'])?>
<?=Form::close() ?>