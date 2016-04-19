@extends('admin.common.layout')
@section('main')
    <div class="row">
        @foreach($seriesList as $series)
            <div class="col-xs-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img title="{{$series->series_main_classify.'>'.$series->series_sub_classify.'>'.$series->series_alias}}" class="img-responsive" src="{{$series->series_cover->file_url}}" alt="系列封面" data-src="holder.js/320x180?theme=sky">
                    </div>
                    <div class="panel-body">
                        {{$series->series_name}}
                        <div class="text-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-gray">删除</button>
                                <button type="button" class="btn btn-info"><a href="/admin/series/{{$series->series_id}}/edit">编辑</a></button>
                                <button type="button" class="btn btn-danger"><a href="/admin/series/group/create">分组</a></button>
                                <button type="button" class="btn btn-success"><a href="/home/series/{{$series->series_id}}">查看</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
