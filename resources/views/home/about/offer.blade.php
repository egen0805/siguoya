@extends('home.common.layout')
@section('main')
    <div class="sidebarMenu">
            <ul id="sidebar-ul" class="nav nav-sidebar">
                <li><a id="basicLink" href="#basicInfo" class="active">基本信息<span class="sr-only">(current)</span></a></li>
                <li><a id="skillLink" href="#skill">技能水平</a></li>
                <li><a id="expLink"  href="#exp">工作经历</a></li>
                <li><a id="demoLink" href="#demo">项目案例</a></li>
                <li><a id="rateLink" href="#rate">自我评价</a></li>
            </ul>
        </div>
    <div class="mainContent">
            <div id="basicInfo">
                <div class="titleArea">
                    <h1>基本信息</h1>
                </div>
                <div class="contentArea">
                    <div class="row">
                        <ul class="list-unstyled">
                            <div class="col-xs-4">
                                <table class="table table-hover">
                                    <tr>
                                        <td>姓名</td><td>曾庆权</td>
                                    </tr>
                                    <tr> <td>性别</td><td>男</td></tr>
                                    <tr><td>出生年月</td><td>1992.10.08</td></tr>
                                    <tr> <td>学历</td><td>本科</td></tr>
                                    <tr> <td>工作经验</td><td>两年</td></tr>
                                    <tr><td>联系电话</td><td>15521190637</td></tr>
                                    <tr>
                                        <td>邮箱</td><td><a href="mailto:924714558@qq.com">924714558@qq.com</a></td>
                                    </tr>
                                    <tr>
                                        <td>毕业学校</td><td>广州大学</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-xs-4 col-xs-offset-3">
                                <img src="/img/common/user/zqq.jpg" alt="曾庆权的个人头像"/>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="skill">
                <div class="titleArea">
                    <h1 >技能水平</h1>
                </div>
                <div class="contentArea">
                    <div id="skill_front">
                        <p>前端</p>
                        <ul>
                            <li>
                                精通Bootstrap前端框架，了解其源码设计理念并能够对源码进行定制修改，无论在PC端还是移动端，都能够做出用户友好型的基于响应式设计的网站
                            </li>
                            <li>
                                能够灵活运用HTML、CSS、LESS、JS、JQ等技术，通过FIS、Grunt、Gulp等自动化工具构建前端开发工作流，并且研究过jQuery2.0以上版本的源码，了解其开发理念与设计模式
                            </li>
                            <li>
                                熟悉http/tcp协议，熟练使用Chrome对前端Bug进行很好的跟踪排错
                            </li>
                        </ul>
                    </div>
                    <div id="skill_back">
                        <p>后台:</p>
                        <ul>
                            <li>
                                熟悉Nginx分别处理静态文件和动态文件的流程，并能够通过Nginx配置多个站点，对HTTP负载均衡和反向代理进行配置和优化，以及利用Nginx的不同模块对Nginx进行调试
                            </li>
                            <li>
                                熟悉MYSQL数据库，区分数据库不同存储引擎的特性，具有索引优化、查询优化、事务处理和性能优化方面的经验
                            </li>
                            <li>
                                精通ThinkPHP框架与Laravel框架，了解CI框架与YII框架，能够根据不同的业务需求选取不同的PHP框架，构建具有Restful风格的网站
                            </li>
                            <li>
                                熟悉WeiPHP框架，能够对微信公众账号进行二次开发
                            </li>
                            <li>
                                熟练使用PHP技术，以面向对象的方式通过大量正则写自定义的模版引擎与自主开发PHP框架，有过博客、CMS、电商、SNS四种类型网站的开发经验
                            </li>
                            <li>
                                对局部缓存、全局缓存、Sql缓存等不同的Web缓存方式有清晰深入的认识，并具有Web性能调优经验
                            </li>
                        </ul>
                    </div>
                    <div id="skill_server">
                        <p>服务器:</p>
                        <ul>
                            <li>
                                熟悉Mac OSX系统的使用，以及阿里云上Centos系列服务器的运营与维护，能够通过编写Bash Shell脚本，并配合邮件提醒来使服务器的运维变得自动化
                            </li>
                            <li>
                                能够熟练搭建SVN/Git，SSH、FTP等常用的服务器，以及基于LNMP的Web开发环境
                            </li>
                            <li>
                                有高度的责任心与安全意识，能够通过建立各种防火墙来保证服务器的稳定运行
                            </li>
                        </ul>
                    </div>
                    <div id="skill_other">
                        <p>其他:</p>
                        <ul>
                            <li>
                                带领团队通过Worktile、SVN/Git等工具进行商业性网站的产品协作开发
                            </li>
                            <li>
                                有良好的代码编写习惯，对网站安全有高度的意识觉悟，对项目进展有强烈的责任意识，渴望接触新技术，能够承担工作压力
                            </li>
                            <li>
                                给国外的JetBrains公司写过英语技术咨询信，给PHP语言开发组的阿里成员写过三千字的自荐信；翻译过国外的PHPStorm技术视频教程，并通过Markdown语法正在重新整理鸟哥的Linux私房菜系列图书
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="exp">
                <div class="titleArea">
                    <h1>工作经历</h1>
                </div>
                <div class="contentArea">
                    <table class="table table-hover">
                    	<thead>
                    		<tr>
                    			<th>时间</th>
                    			<th>工作</th>
                    			<th>职位</th>
                    		</tr>
                    	</thead>
                    	<tbody>
                    		<tr>
                    			<td>2012年9月—2013年6月</td>
                    			<td>维护广州大学教育学院博客</td>
                    			<td>编辑部部委</td>
                    		</tr>
                            <tr>
                                <td>2012年9月—2014年6月</td>
                                <td>广大淬砺工作站微信服务号开发</td>
                                <td>PHP程序员</td>
                            </tr>
                            <tr>
                                <td>2013年11月</td>
                                <td>开发广州名动漫公司社区交流网站</td>
                                <td>PHP程序员</td>
                            </tr>
                            <tr>
                                <td>2014年9月—2014年12月</td>
                                <td>广州毛毛虫网络科技有限公司</td>
                                <td>PHP工程师</td>
                            </tr>
                            <tr>
                                <td>2015年1月—2015年12月</td>
                                <td>广州蝶梦网络科技有限公司</td>
                                <td>CTO</td>
                            </tr>
                            <tr>
                                <td>2016年1月—至今</td>
                                <td>思过崖 - 写如诗的代码</td>
                                <td>个人站长</td>
                            </tr>
                    	</tbody>
                    </table>
                </div>
            </div>
            <div id="demo">
                <div class="titleArea">
                    <h1>项目案例</h1>
                </div>
                <div class="contentArea">
                    <div id="firstDemo">
                        <h2 class="sub-header">项目一: 高校狗— <a href="http://www.caugoo.com/" target="_blank">http://www.caugoo.com/</a></h2>
                        <p>项目描述:一个C2B型的专业的校园场地整合平台,采用共享经济模式一
                           年时间,业务扩展到全国</p>
                        <p>负责内容:全栈开发</p>
                        <p>详细工作:</p>
                        <ul>
                            <li>根据设计图,进行前端页面代码HTML、CSS、JS的编写</li>
                            <li>根据业务需求,进行数据库的优化设计</li>
                            <li>优化前端代码,提高前端性能,利用HTTP协议和前端数据库,对场地图片以及场地的查询结果信息进行缓存</li>
                            <li>后台管理—网站注册用户信息的综合处理</li>
                            <li>后台管理—校园场地信息的综合处理</li>
                            <li>后台管理—网站订单信息的综合处理</li>
                            <li>网站安全:JS验证、服务器端验证,数据库端验证,可疑IP跟踪</li>
                            <li>团队协作:利用Worktile和SVN进行协作开发以及项目的版本控制</li>
                        </ul>
                    </div>
                    <div id="secondDemo">
                        <h2 class="sub-header">项目二:我想要—<a href="http://www.woxiangyao.me/" target="_blank">http://www.woxiangyao.me/</a></h2>
                        <p>项目描述:一个C2C型的服务交易平台,为互联网企业免费做校园推广, 让大学生躺着就能挣钱</p>
                        <p>负责内容:全栈开发</p>
                        <p>具体工作:</p>
                        <ul>
                            <li>购买域名和阿里云Centos服务器并备案,配置Git/FTP服务器,搭建网站开发环境</li>
                            <li>选取JQ框架,Bootstrap前端框架和ThinkPHP后台框架作为网站开发的底层框架</li>
                            <li>整合以CI框架为基础的社区模块,并进行二次开发</li>
                            <li>实现根据不同参数自动生成二维码、手机短信/语音验证码、支付宝支付等API的开发调用功能</li>
                            <li>通过WeiPHP框架进行产品的微信公众账号开发,使产品可以支持跨设备浏览</li>
                            <li>网站安全:JS验证、服务器端验证,数据库端验证,可疑IP跟踪,系统防火墙,服务防火墙以及SELinux设置,对Linux服务器日志进行分析排障</li>
                            <li>团队协作:利用MindNode,WizNote,Worktile和Git进行协作开发以及项目的版本控制</li>
                        </ul>
                    </div>
                    <div id="thirdDemo">
                        <h2 class="sub-header">项目三:思过崖—<a href="http://www.siguoya.name/" target="_blank">http://www.siguoya.name/</a></h2>
                        <p>项目描述:个人利用业余时间开发和运营的技术博客与问答社区，通过最新最热的PHP框架和相关技术开发网站，致力于将自己学习过的碎片化的编程知识进行规范化和系统化，并在和其他程序猿的交流中提高自己的编程能力</p>
                        <p>负责内容:技术＋产品＋运营</p>
                        <p>具体工作:</p>
                        <ul>
                            <li>购买域名和阿里云Centos服务器并备案，基于LNMP开发环境，配置Git服务器</li>
                            <li>选取JQ框架，Bootstrap前端框架和Laravel框架作为网站开发的底层框架，使用Gulp构建前端开发自动化环境，使用Bootstrap开发响应式网站，并利用Laravel框架设计具有Restful风格的API。</li>
                            <li>整合以Zend框架为基础的WeCenter社区模块，并进行二次开发</li>
                            <li>网站安全：JS验证、服务器端验证，数据库端验证，可疑IP跟踪，系统防火墙，服务防火墙以及SELinux设置，对Linux服务器日志进行分析排障</li>
                            <li>通过知乎发帖为网站引流，以百度统计为工具对流量来源、用户行为进行分析，通过百度、谷歌、360、搜搜四大站长平台对网站进行SEO优化</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="rate">
                <div class="titleArea">
                    <h1>自我评价</h1>
                </div>
                <div class="contentArea">
                    <div id="firstDemo">
                        <p>优点</p>
                        <ul>
                            <li>敢闯敢拼，乐于钻研，放荡不羁爱编程，对新技术有强烈兴趣，渴望成为一代技术大牛</li>
                            <li>踏实诚信，时间观念强，不断对自我提出高标准的要求</li>
                            <li>博客园、Github、StackOverflow是心灵之归属，汲取营养的圣地，通过WizNote笔记整理自身所学，并建立技术博客，不断反省归纳</li>
                            <li>对英语很感兴趣，经常翻墙，研究框架之源码，以及通过翻译国外的技术材料促进国外技术在国内的推广传播</li>
                            <li>具有较强的团队合作意识与良好的沟通能力，善于利用版本控制工具以及团队协作工具，进行团队项目的开发</li>
                        </ul>
                    </div>
                    <div id="secondDemo">
                        <p>缺点</p>
                        <ul>
                            <li>实战经验丰富，但是目前对于数据结构与算法这一块的知识掌握的不是太好，正在恶补中</li>
                            <li>学习的技术涉及面较广，对API文档有比较深的依赖</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection
