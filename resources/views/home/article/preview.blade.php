@extends('home.common.layout')
@section('css')

@endsection
@section('js')

@endsection
@section('main')
    <div class="row">
        <div class="col-xs-12">
            <div class="alert alert-info">
                <a href="#" class="close" data-dismiss="alert">
                    &times;
                </a>
                <h3 class="text-danger">为什么要学习算法?</h3>
                <p>MIT教授<a href="http://erikdemaine.org/" target="_blank">Erik Demaine</a>说过以下一段话,足可以证明算法之于程序猿的重要性</p>
                <blockquote><p >" If you want to become a good programmer, you can spend 10 years programming, or spend 2 years programming and learning algorithms. "</p></blockquote>
                <p>如果看不懂以上的文字没关系,大学毕业应聘时总会看到30%左右的算法题目的</p>
                <p>不管你爱不爱,它就在那里,与其不能反抗,不如主动适应</p>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="panel panel-default">
            	  <div class="panel-body padding-none">
                      <a href="/home/arithmetic/javascript/datahandler/" target="_blank"><img class="img-responsive" src="/img/home/arithmetic/javascript/datahandler.jpg" alt="JavaScript算法之数据处理"></a>
            	  </div>
            	  <div class="panel-footer">
                      <a href="/home/arithmetic/javascript/datahandler/">1.JavaScript算法之数据处理</a>
                  </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-body padding-none">
                    <a href="/home/arithmetic/javascript/dataselect/" target="_blank"><img class="img-responsive" src="/img/home/arithmetic/javascript/dataselect.jpg" alt="JavaScript算法之数据查找"></a>
                </div>
                <div class="panel-footer">
                    <a href="/home/arithmetic/javascript/dataselect/">2.JavaScript算法之数据查找</a>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-body padding-none">
                    <a href="/home/arithmetic/javascript/dataorder/" target="_blank"><img class="img-responsive" src="/img/home/arithmetic/javascript/dataorder.jpg" alt="JavaScript算法之数据排序"></a>
                </div>
                <div class="panel-footer">
                    <a href="/home/arithmetic/javascript/dataorder/">3.JavaScript算法之数据排序</a>
                </div>
            </div>
        </div>
        <div class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-body padding-none">
                    <a href="/home/arithmetic/javascript/datacode/" target="_blank"><img class="img-responsive" src="/img/home/arithmetic/javascript/datacode.jpg" alt="JavaScript算法之数据加密"></a>
                </div>
                <div class="panel-footer">
                    <a href="/home/arithmetic/javascript/datacode/">4.JavaScript算法之数据加密</a>
                </div>
            </div>
        </div>
    </div>
@endsection