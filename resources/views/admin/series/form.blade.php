<?=Form::open([]) ?>
<legend id="legend" data-src="{{isset($series)?$series->series_id:''}}">文章系列管理</legend>
<div class="form-group">
    <label for="seriesName">系列名称</label>
    <input type="text" class="form-control" name="seriesName" value="{{isset($series)?$series->series_name:''}}" id="seriesName" placeholder="系列名称...">
</div>
<div class="form-group">
    <label for="seriesName">系列名称</label>
    <input type="text" class="form-control" name="seriesName" value="{{isset($series)?$series->series_alias:''}}" id="seriesAlias" placeholder="系列别名...">
</div>
<div class="form-group">
    <?=Form::label('seriesCover','系列封面') ?>
    <?=Form::hidden('seriesCover',isset($series)?($series->series_cover?$series->series_cover->file_url:''):'',['id'=>'seriesCover'])?>
    <img src="{{isset($series)?($series->series_cover?$series->series_cover->file_url:''):''}}" id="coverPreview"
            class="img-responsive img-list-cover"
            data-src="holder.js/320x180?theme=sky"
            alt="系列配图">
</div>
<div id="uploaderArea" class="form-group">
            <span class="btn btn-info btn-file">
                封面上传 <input id="file" name="file" type="file">
            </span>
</div>
<div class="form-group">
    <div class="form-group">
        <?=Form::label('articleMainClassify','系列主类') ?>
        <?=Form::select('articleMainClassify',$classifyList,null,['class'=>'form-control'])?>
    </div>
    <div class="form-group">
        <?=Form::label('articleSubClassify','系列子类') ?>
        <?=Form::select('articleSubClassify',[],null,['class'=>'form-control'])?>
    </div>
</div>
<button id="submit" type="submit" class="btn btn-primary">确定发布</button>
<?=Form::close() ?>