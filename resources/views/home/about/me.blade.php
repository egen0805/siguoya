@extends('home.common.layout')
@section('main')
    <div class="jumbotron">
        <h1>字如其人,代码如诗</h1>
        <p class="lead">
            不想成为设计狮的文艺二B青年不是好程序猿
        </p>
        <p><a class="btn btn-lg btn-success-empty" href="#">一生放荡不羁爱编程</a></p>
    </div>
    <div class="body-content">
        <div class="row">
            <div class="col-lg-4">
                <h2>个人</h2>
                <p>
                <li>简介:曾庆权 男 23岁</li>
                <li>爱好:编程,电影,旅游</li>
                <li>婚姻:6年恋爱</li>
                <li>愿望:找靠谱的公司,做感兴趣的项目,奉献我的一腔热血</li>
                </p>
                {{--<p>--}}
                    {{--<a class="btn btn-default" href="/home/about/personal">你我不一样的青春 &raquo;</a>--}}
                {{--</p>--}}
            </div>
            <div class="col-lg-4">
                <h2>教育</h2>
                <p>
                    <li>教育:广州大学教育学院心理学专业</li>
                    <li>时间:心理学=1学期1个星期</li>
                    <li>时间:计算机=全年无休</li>
                    <li>地址:广州市番禺区广州大学城</li>
                </p>
                {{--<p>--}}
                    {{--<a class="btn btn-default" href="/home/about/edu">大爱学习的大学生 &raquo;</a>--}}
                {{--</p>--}}
            </div>
            <div class="col-lg-4">
                <h2>求职</h2>
                <p>
                    <li>两年工作经验,JS+PHP+Linux,自嘲全栈攻城狮</li>
                    <li>从博客项目到CMS项目,从电商项目到SNS项目</li>
                    <li>两个商业性网站,三台阿里云服务器的运营与维护</li>
                    <li>不断追求卓越,渴望做得更好!</li>
                </p>
                {{--<p>--}}
                    {{--<a class="btn btn-default" href="/home/about/career">求得一知己 &raquo;</a>--}}
                {{--</p>--}}
            </div>
        </div>
    </div>
@endsection
