@extends('admin.common.layout');
@section('main')
    <div class="col-xs-3">
        <form action="" method="post" role="form">
        	<legend>添加分类</legend>
        	<div class="form-group">
        		<label for="">类名称</label>
        		<input type="text" class="form-control" name="" id="" placeholder="Input...">
        	</div>
            <div class="form-group">
                <label for="">类别名</label>
                <input type="text" class="form-control" name="" id="" placeholder="Input...">
            </div>
            <div class="form-group">
                <label for="">一级类</label>
                <input type="text" class="form-control" name="" id="" placeholder="Input...">
            </div>
        	<button type="submit" class="btn btn-primary btn-block">确定添加</button>
        </form>
    </div>
    <div class="col-xs-9">
        <div>
            <ul class="list-unstyled">
                <li>
                    @foreach($classifyTree as $value)
                    <ol class="breadcrumb">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="active">Link</li>
                    </ol>
                    @endforeach
                </li>
                <li>
                    <div class="btn-group">
                        <button type="button" class="btn btn-default">编辑</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
@endsection
