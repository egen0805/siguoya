@extends('home.common.layout')
@section('main')
    <div class="col-xs-12 col-sm-8">
        <a target="_blank" href="http://gjsq.me/924568"><img class="img-responsive" src="/img/common/product/greenvpn/head.png" alt="greenvpn"></a>
        <div class="well text-info"><a target="_blank" href="http://gjsq.me/924568">greenvpn</a>是老牌vpn提供商，新注册用户有200M免费流量</div>
        <blockquote>一、注册</blockquote>
        <p>由于百度搜索里面存在大量假冒网址，请点击
            <a href="http://gjsq.me/924568" target="_blank">greenvpn</a>
            直接进入注册页面，注册后通过邮箱激活，即可获得200M免费流量
            <a target="_blank" href="http://gjsq.me/924568"><img class="img-responsive" src="/img/common/product/greenvpn/register.png" alt="greenvpn"></a>
        </p>
        <blockquote>二、使用</blockquote>
        <p>
            点击查看官网上详细的<a href="https://www.jsqgreen.net/shiyong.html" target="_blank">使用说明</a>
        </p>
        <blockquote>三、关于VIP套餐</blockquote>
        <p>
            网上有很多网站都可以找到免费的VPN账号，如果不是工作需要经常用，仅是想在朋友圈里面晒一下Instagram,twitter刷优越感的，大可不必开通VIP套餐，多上几个网站找找，不断打游击战总是可以的；
        </p>
        <p>
            如果是编程、外贸等对外国网站有强烈依赖的用户，建议开通VIP套餐，毕竟免费的账号不同程度上都存在不稳定、限流量、打开慢等各种坑爹的情况，与其省这么一点小钱，不如提高工作效率，提升自己的职场竞争力
        </p>
        <p>
            如果不知道选哪种套餐，个人认为开通包年的套餐是最划算的，平均13元/月，又能支持电脑与手机两台设备，何乐而不为呢？</p>
        <p>
            <img class="img-responsive" src="/img/common/product/greenvpn/vip.png" alt="greenvpn">
        </p>
        <blockquote>四、关于使用VPN之后，访问国内网站变慢的问题</blockquote>
        <p>
            由于VPN服务器大多搭建在国外，所以你使用VPN服务之后就相当于你是在国外访问国内的网站了 至于解决方法嘛，没有什么问题是可以难倒无所不能的中国人的（此处只讲Mac系统的操作方法）
        </p>
        <p>
            首先从谷歌代码库中下载代码包：
            <a href="https://code.google.com/p/chnroutes/downloads/list" target="_blank">https://code.google.com/p/chnroutes/downloads/list</a>
        </p>
        <p>在终端中执行以下代码，这将生成ip-up和ip-down两个文件
        <pre class="text-danger">python chnroutes.py -p mac</pre>
        </p><p>将这两个文件移入/etc/ppp/，且需要通过chmod的方式使其具有可执行的权限，一切就绪之后重新连接VPN即可</p>
    </div>
    <div class="col-xs-12 col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">为什么要使用VPN</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <li>大部分外国网站目前难以访问</li>
                    <li>VPN是虚拟专用网络，可以绕过限制</li>
                </ul>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">国外优秀的编程网站</h3>
            </div>
            <div class="panel-body">
                <a href="https://github.com/" target="_blank"><img src="/img/common/product/greenvpn/github-logo.png" class="img-responsive" alt="github"></a>
                <a href="https://github.com/" target="_blank">GitHub</a>：程序猿专属，全球最大的男同交友平台
                <a href="http://stackoverflow.com/" target="_blank">StackOverflow</a>：程序猿版知乎
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">国外优秀的创业网站</h3>
            </div>
            <div class="panel-body">
                <a href="http://techcrunch.com/" target="_blank"><img class="img-responsive" src="/img/common/product/greenvpn/tc-logo.jpg" alt="TechCrunch"></a>
                <a href="http://techcrunch.com/" target="_blank">TechCrunch</a>：算得上是36Kr的前身了，由大名鼎鼎的迈克尔-阿灵顿（MichaelArrington）主办，主要关注高科技，尤其是Web2.0领域的创业企业。TechCrunch本质上是一家为创业企业服务的网站。有评论认为，阿灵顿的一篇文章能够成就一家企业，或是毁掉一家企业。
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">国外优秀的问答网站</h3>
            </div>
            <div class="panel-body">
                <a href="https://www.quora.com/" target="_blank">
                    <img src="/img/common/product/greenvpn/quora-logo.png" class="img-responsive" alt="Quora">
                </a>
                <a href="https://www.quora.com/" target="_blank">Quora</a>：知乎前身，学英语必备神器
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">国外优秀的新闻网站</h3>
            </div>
            <div class="panel-body">
                <a href="https://flipboard.com/" target="_blank">
                    <img class="img-responsive" src="/img/common/product/greenvpn/flipboard-logo.png" alt="flipboard">
                </a>
                <a href="https://flipboard.com/" target="_blank">flipboard</a>：算得上Zaker前身,新闻聚合网站,只关注您感兴趣的
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">国外优秀的娱乐网站</h3>
            </div>
            <div class="panel-body">
                <a href="https://twitter.com/" target="_blank">
                    <img class="img-responsive" src="/img/common/product/greenvpn/twitter-logo.png" alt="twitter">
                </a>
                <a href="https://twitter.com/" target="_blank">twitter</a>：新浪微博前身,观看世界的一扇窗<br/>
                <a href="https://www.facebook.com/" target="_blank">facebook</a>：人人网前身,王兴是"连续创业者"<br/>
                <a href="https://www.youtube.com/" target="_blank">youtube</a>：类似"阿优土",唉,视频行业是一片红海
            </div>
        </div>
    </div>
@endsection