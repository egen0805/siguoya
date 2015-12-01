<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="row">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">思过崖</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{url('/admin/index/index')}}">后台首页</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">文章管理 <b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('admin/classify')}}">类别管理</a></li>
                            <li><a href="{{url('admin/article')}}">文章查看</a></li>
                            <li><a href="{{url('admin/article/create')}}">文章发布</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{$adminInfo->name}}
                            <b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/auth/logout')}}">退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>