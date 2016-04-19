@extends('admin.common.layout')
@section('css')
    <link rel="stylesheet" href="/vendor/select2/select2.min.css">
@endsection
@section('js')
    <script type="text/javascript" src="/vendor/select2/select2.min.js"></script>
    <script type="text/javascript">
        $(function(){
          $('.js-example-basic-multiple').select2();
        });
    </script>
@endsection
@section('main')
    <div class="row">
       <form action="" method="post" role="form">
           <legend>添加分组</legend>
           <select name="" class="js-example-basic-multiple" multiple="multiple">
               <option value="0">1</option>
               <option value="1">2</option>
               <option value="2">3</option>
               <option value="3">4</option>
               <option value="4">5</option>
           </select>
           <button type="submit" class="btn btn-primary btn-block">立即保存</button>
       </form>
    </div>
@endsection
