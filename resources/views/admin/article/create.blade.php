@extends('admin.common.layout')
@section('css')
    <link rel="stylesheet" href="/vendor/editor/css/editormd.min.css" />
@endsection
@section('js')
    <script type="text/javascript" src="/vendor/editor/editormd.js"></script>
    <script type="text/javascript" src="/vendor/uploader/src/dmuploader.js"></script>
@endsection
@section('main')
    @include('admin.article.form',['classifyList'=>$classifyList])
@stop

