<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
    <ul class="nav navbar-nav pull-right hidden-xs">
        <li>
            <a href="/home/about/me">版权所有 &copy <span class="text-info">思过崖</span></a>
        </li>
        <li>
            <a href="http://www.aliyun.com/">构建于<span class="text-info">阿里云</span>上</a>
        </li>
        <li>
            <a href="http://laravel.com/">自豪地使用<san class="text-info">Laravel</san>框架</a>
        </li>
        <li>
            <a href="#">粤ICP备 <span class="text-info">15099320号-1</span></a>
        </li>
        <li>
            <img id="qr_donate" src="/img/common/user/donate.jpg" alt="思过崖的微信" style="display: none;position: absolute;top: -300px;left: -200px;">
            <a id="donate" href="#"><span class="text-info">捐赠狗粮</span></a>
        </li>
        <li>
            <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=924714558&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:924714558:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a>
        </li>
    </ul>
    <ul class="nav navbar-nav visible-xs-block">
        <li>
            @if(date('Y')=='2015')
                <a class="text-center" href="">&copy;思过崖 2015</a>
            @else
                <a class="text-center" href="">&copy;思过崖 2015-{{date('Y')}}</a>
            @endif
        </li>
    </ul>
</nav>
<script type="text/javascript">
    $('#donate').click(function(){
        $('#qr_donate').fadeIn(300);
        return false;
    });
    $('body').click(function(){
        $('#qr_donate').fadeOut(300);
    })
</script>