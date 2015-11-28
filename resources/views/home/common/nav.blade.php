<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?=url('/')?>">思过崖</a>
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
            </div>
        </div>
    </div>
</nav>