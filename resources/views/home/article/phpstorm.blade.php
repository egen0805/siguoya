@extends('home.common.layout')
@section('css')

@endsection
@section('js')

@endsection
@section('main')
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-danger text-center">天降神器PhpStorm — 东西半球最好用的PHP IDE编辑器</h1>
            <hr/>
            <div id="phpstorm_header" class="row">
                <div class="col-xs-9">
                    <div class="alert alert-info">
                        <p>如果了解并真正爱上一个人需要1年的时间;那么了解并真正爱上PhpStorm只需要1个星期的时间</p>
                        <p>作为一个PHPer来说,我觉得世界上最好的语言是PHP,世界上做好的PHP编辑器是PhpStorm,此处应该有掌声...</p>
                        <p>它不断地与时俱进,集成对当前最流行工具及框架的支持:git/composer/Bootstrap/Laravel......你想要的,这里都有!</p>
                    </div>
                </div>
                <div class="col-xs-3">
                    <p class="text-center">
                        {{--<button class="btn btn-lg btn-info btn-info-empty redirectLessons">立刻玩转PhpStorm</button>--}}
                    </p>
                    <p class="text-center">
                        <button class="btn btn-lg btn-info btn-info-empty redirectLessons">
                            PhpStorm软件下载
                        </button>
                    </p>
                </div>
            </div>
            <div id="phpstorm_imgs" class="row">
                <div class="col-xs-12">
                    <!-- TAB NAVIGATION -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#tab1" role="tab" data-toggle="tab">代码提醒</a></li>
                        <li><a href="#tab2" role="tab" data-toggle="tab">文件定位</a></li>
                        <li><a href="#tab3" role="tab" data-toggle="tab">代码重构</a></li>
                        <li><a href="#tab4" role="tab" data-toggle="tab">调试测试</a></li>
                        <li><a href="#tab5" role="tab" data-toggle="tab">框架支持</a></li>
                        <li><a href="#tab6" role="tab" data-toggle="tab">版本控制/依赖管理/工具集</a></li>
                    </ul>
                    <!-- TAB CONTENT -->
                    <div class="tab-content">
                        <div class="active tab-pane fade in" id="tab1">
                            <img class="img-responsive" src="/img/home/php/phpstorm/assistance.png" alt="PhpStorm">
                        </div>
                        <div class="tab-pane fade" id="tab2">
                            <img class="img-responsive" src="/img/home/php/phpstorm/navigation.png" alt="PhpStorm">
                        </div>
                        <div class="tab-pane fade" id="tab3">
                            <img class="img-responsive" src="/img/home/php/phpstorm/refactoring.png" alt="PhpStorm">
                        </div>
                        <div class="tab-pane fade" id="tab4">
                            <img class="img-responsive" src="/img/home/php/phpstorm/debugging.png" alt="PhpStorm">
                        </div>
                        <div class="tab-pane fade" id="tab5">
                            <img class="img-responsive" src="/img/home/php/phpstorm/frameworks.png" alt="PhpStorm">
                        </div>
                        <div class="tab-pane fade" id="tab6">
                            <img class="img-responsive" src="/img/home/php/phpstorm/vcs.png" alt="PhpStorm">
                        </div>
                    </div>
                </div>
            </div>
            {{--<button id="redirectLessons" class="btn btn-primary btn-block redirectLessons">PhpStorm, 约吗?</button>--}}
            <div id="phpstorm_intro" class="row">
                <div class="col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="text-danger">智能的PHP代码编辑器</span>
                        </div>
                        <div class="panel-body">
                            <img class="img-responsive" src="/img/home/php/phpstorm/thumb_php_code_editor.png" alt="phpstorm">
                        </div>
                        <div class="panel-footer">
                            <ul>
                                <li>最懂你代码的编辑器，深入理解代码的结构;支持PHP语言的所有功能，不管是当前最潮流的PHP版本还是过时的版本；提供了最好的代码自动完成服务，重构以及错误提醒等.</li>
                                <li>即使你知道凌晨4点钟的洛杉矶是怎样的,但你知道有对Bootstrap以及Laravel可以智能提醒的编辑器吗?</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="text-danger">代码质量分析</span>
                        </div>
                        <div class="panel-body">
                            <img class="img-responsive" src="/img/home/php/phpstorm/thumb_code_quality.png" alt="phpstorm">
                        </div>
                        <div class="panel-footer">
                            <ul>
                                <li>数百个检查器对你输入的代码以及整个项目进行分析;支持PHPDoc,代码整理以及格式化;所有的一切,只是为了让你写出的代码更加整洁优雅</li>
                                <li>据说, 一个写出优雅代码的程序员就是这样炼成的;</li>
                                <li>Laravel是为PHP艺术家而生的框架, 而PhpStorm是一个为PHP艺术家而生的代码的编辑器</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="text-danger">开发环境</span>
                        </div>
                        <div class="panel-body">
                            <img class="img-responsive" src="/img/home/php/phpstorm/thumb_vcs.png" alt="phpstorm">
                        </div>
                        <div class="panel-footer">
                            <ul>
                                <li>深度整合VCS版本控制器，提供远程部署，数据库图形操作，命令行工具，Vagrant虚拟机，Composer依赖管理，以及更多需要你来发现的功能</li>
                                <li>爱PHP,所以爱PhpStorm</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="text-danger">HTML/CSS/JavaScript 编辑器</span>
                        </div>
                        <div class="panel-body">
                            <img class="img-responsive" src="/img/home/php/phpstorm/thumb_html_css_js.png" alt="phpstorm">
                        </div>
                        <div class="panel-footer">
                            <ul>
                                <li>集成前端核心科技:HTML5, CSS, Sass, Less, Stylus, CoffeeScript, TypeScript, Emmet, JavaScript以及重构, 调试和单元测试</li>
                                <li>它不仅仅是PHP代码编辑器, 更是全栈编辑器</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="text-danger">调试和测试</span>
                        </div>
                        <div class="panel-body">
                            <img class="img-responsive" src="/img/home/php/phpstorm/thumb_php_code_editor.png" alt="phpstorm">
                        </div>
                        <div class="panel-footer">
                            <ul>
                                <li>
                                    无需任何配置,即可使用Xdebug或Zend Debugger对你的项目进行调试; PHPUnit与Behat的支持,让测试的开发与运行So easy!
                                </li>
                                <li>这下终于可以和测试MM欢乐地做朋友了!</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <span class="text-danger">跨平台的开发体验</span>
                        </div>
                        <div class="panel-body">
                            <img class="img-responsive" src="/img/home/php/phpstorm/thumb_php_code_editor.png" alt="phpstorm">
                        </div>
                        <div class="panel-footer">
                            <ul>
                                <li>基于不同平台的PhpStorm软件,在Window, Mac OSX, Linux三大平台上享有可持续的同步更新</li>
                                <li>请享受它的卓越性与稳定性吧,这一切仅仅只需要一个许可证而已</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{--<button class="btn btn-primary btn-block redirectLessons">开启PhpStorm振奋人心之旅</button>--}}
        </div>
    </div>
@endsection