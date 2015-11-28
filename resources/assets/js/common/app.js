$(function(){
    (function(){
        window.global={
            $window:$(window),
            $document:$(document),
            $loading:$('.common_loading'),
            $modalTitle:$('#modalTitle'),
            $modalContent:$('#modalContent'),
            $modalCancelButton:$('#modalCancelButton'),
            $modalOkButton:$('#modalOkButton'),
            $dialogButton:$('#dialogButton'),
            $dialogClose:$('#modalClose'),
            //简化调试
            yfx:function(arg){
                console.log(arg);
                return;
            },
            //弹窗
            dialogOpen:function(customConfig,scope){
                //默认配置
                var config= $.extend({
                    title:'标题',
                    content:'内容',
                    showOk:false,
                    showCancel:false,
                    okFunc:null,
                    cancelFunc:null,
                    redirectUrl:''
                },customConfig);
                //标题
                global.$modalTitle.html(config.title);
                //内容
                global.$modalContent.html(config.content);
                //操作
                //显示与隐藏操作按钮
                config.showCancel? global.$modalCancelButton.show():true;
                config.showOk? global.$modalOkButton.show():true;
                //确定与取消按钮绑定的事件
                if(config.okFunc){
                    global.$modalOkButton.unbind('click');
                    global.$modalOkButton.click(function(){
                        config.okFunc.call(scope);
                    });
                }
                //弹出Modal框
                global.$dialogButton.trigger('click');
                //是否自动跳转
                if(config.redirectUrl){
                    setTimeout(function(){
                        window.location.href=config.redirectUrl;
                    },2500);
                }
            },
            dialogClose:function(waitTime){
                var waitTime=waitTime?waitTime:0;
                setTimeout(function(){
                    global.$dialogClose.trigger('click');
                },waitTime);
            },
            dialogDestroy:function(){
                global.dialogClose();
                global.$modalCancelButton.unbind('click').hide();
                global.$modalOkButton.unbind('click');
                global.$modalOkButton.click(function(){
                    global.dialogClose();
                });
            },
            //检测用户是否登录
            isLogin:function(){
                return $.cookie('user_info')?true:false;
            },
            //从cookie中获取信息
            userInfo:function(){
                if(!global.isLogin()){
                    return null;
                }
                var tmp={};
                var userInfoObj=JSON.parse($.cookie('user_info'));
                tmp['userId']=userInfoObj['user_id'];
                tmp['userName']=userInfoObj['user_name'];
                if(userInfoObj['user_face']){
                    var userFaceObj=JSON.parse(userInfoObj['user_face']);
                    //tmp['userFaceSM']=Think['ROOT']+userFaceObj['userFaceSM'];
                    //tmp['userFaceMD']=Think['ROOT']+userFaceObj['userFaceMD'];
                    //tmp['userFaceLG']=Think['ROOT']+userFaceObj['userFaceLG'];
                }else{
                    //tmp['userFaceSM']=Think['PUBLIC']+'img/User/user_30x30.png';
                    //tmp['userFaceMD']=Think['PUBLIC']+'img/User/user_60x60.png';
                    //tmp['userFaceLG']=Think['PUBLIC']+'img/User/user_120x120.png';
                }
                return tmp;
            },
            //检测Bootstrap编码规范
            codeCheckBootstrap:function(){
                var s=document.createElement("script");
                s.onload=function(){
                    bootlint.showLintReportForCurrentDocument([]);
                };
                //s.src=Think['ROOT']+'Public/Common/js/bootlint.min.js';
                document.body.appendChild(s)
            },
            //显示loading加载图
            loadingShow:function($eleParent){
                if(!$eleParent.find('.common_loading').length){
                    global.$loading.clone().appendTo($eleParent);
                }
                $eleParent.find('.common_loading').show();
            },
            //隐藏loading加载图
            loadingHidden:function($eleParent){
                $eleParent.find('.common_loading').hide();
            },
            //结束loading加载图
            loadingComplete:function($eleParent){
                $eleParent.find('.common_loading').html(
                    '<div class="well">没有更多的数据了, o(︶︿︶)o</div>'
                ).show();
            },
            errorReport:function(resp){
                global.dialogDestroy();
                setTimeout(function(){
                    global.dialogOpen({
                        title:'错误提示',
                        content:resp+',请联系客服QQ:924714558',
                        showCancel:true
                    });
                },1000);
            }
        }

    }());
    (function(){
        //自动解析页面中的Markdown
        if($('#mdContainer').length>0){
            editormd.markdownToHTML('markdown',{
                markdown:$('#mdContainer').val(),
                //htmlDecode      : true,       // 开启 HTML 标签解析，为了安全性，默认不开启
                //htmlDecode      : "style,script,iframe",  // you can filter tags decode
                //toc             : false,
                //tocm            : true,    // Using [TOCM]
                //tocContainer    : "#custom-toc-container", // 自定义 ToC 容器层
                //gfm             : true,
                //tocDropdown     : true,
                markdownSourceCode : true, // 是否保留 Markdown 源码，即是否删除保存源码的 Textarea 标签
            });
        }
    }());
    (function() {
        //百度统计代码
        var _hmt = _hmt || [];
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?dbc825061da32f4cf32e3c7c56e95034";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    }());
});
