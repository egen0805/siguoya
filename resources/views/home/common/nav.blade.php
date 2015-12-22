<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?=url('/')?>"><h1>思过崖</h1></a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="/">首页</a></li>
                    @foreach($articleClassify as $v)
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{ $v['classify_name'] }}
                                <b class="caret"></b> </a>
                            <ul class="dropdown-menu">
                                @foreach($v['sub_classify'] as $w)
                                    <li>
                                        <a href="{{url('/home/'.$v['classify_alias'].'/'.$w['classify_alias']) }}">{{ $w['classify_name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach

                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            社区
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            @if($_SERVER["SERVER_ADDR"]=='120.24.253.51')
                                <li><a href="http://wenda.siguoya.name">发现</a></li>
                                <li><a href="http://wenda.siguoya.name/?/home/#all">动态</a></li>
                                <li><a href="http://wenda.siguoya.name/?/topic/">话题</a></li>
                                <li><a href="http://wenda.siguoya.name/?/notifications/">通知</a></li>
                            @else
                                <li><a href="http://wenda.firstdomain.name">发现</a></li>
                                <li><a href="http://wenda.firstdomain.name/?/home/#all">动态</a></li>
                                <li><a href="http://wenda.firstdomain.name/?/topic/">话题</a></li>
                                <li><a href="http://wenda.firstdomain.name/?/notifications/">通知</a></li>
                            @endif
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            关于
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/home/about/me')}}">个人</a></li>
                            <li><a href="{{url('/home/about/offer')}}">求职</a></li>
                            <li><a href="{{url('/home/about/web')}}">网站</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>