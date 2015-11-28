@extends('admin.common.layout')
@section('main')
    <table class="table table-hover">
    	<thead>
    		<tr>
    			<th>文章ID</th>
    			<th>文章名称</th>
    			<th>文章浏览量</th>
    			<th>文章处理</th>
    		</tr>
    	</thead>
    	<tbody>
			@foreach($articleList as $article)
				<tr>
					<td>{{$article->article_id}}</td>
					<td><a href="/home/{{$article->article_main_classify.'/'.$article->article_sub_classify.'/'.$article->article_id}}">{{$article->article_title}}</a></td>
					<td>{{$article->article_view_count}}</td>
					<td>
						<div class="btn-group">
							<button type="button" class="btn btn-info">
								<a href="/admin/article/{{$article->article_id}}/edit">编辑</a>
							</button>
							<button type="button" class="btn btn-danger">删除</button>
						</div>
					</td>
				</tr>
			@endforeach
    	</tbody>
    </table>
@endsection