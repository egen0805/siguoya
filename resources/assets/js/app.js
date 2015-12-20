;(function(window,$){
    $(function(){
        /**
         * 全局初始化代码以及辅助方法
         */
        (function(){
            /*全局jQuery变量及方法*/
            window.$document=$(document);
            window.$window=$(window);
            window.yfx=function(){
                console.log(arg);
                return;
            }
            /*百度*/
            if(location.href.indexOf('admin')<0){
                //百度统计代码
                var _hmt=_hmt||[];
                var hm=document.createElement("script");
                hm.src="//hm.baidu.com/hm.js?dbc825061da32f4cf32e3c7c56e95034";
                var s=document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(hm,s);

                //主动推送新增链接到百度
                var bp = document.createElement('script');
                bp.src = '//push.zhanzhang.baidu.com/push.js';
                var s = document.getElementsByTagName("script")[0];
                s.parentNode.insertBefore(bp, s);
            }
        }());

        /**
         *Bootstrap组件增强
         */
        (function(){
            /*使bs3-tabs里面的组件自动切换*/
            var $nav_tab=$('.nav-tabs'),count=$nav_tab.find('a').length,$a=$nav_tab.find('a'),order=1,timer;
            function autoSwitch(){
                $($a.get(order)).trigger('click');
                order++;
                if(order>=count){
                    order=0;
                }
            }
            timer=setInterval(autoSwitch,3000);
            $('.tab-pane').hover(function(){
                clearInterval(timer);
            },function(){
                timer=setInterval(autoSwitch,3000);
            });
            $('.redirectLessons').click(function(){
                window.location.href='/home/backend/tools/phpstorm/';
            })
        }());

        /**
         * 文章管理
         */
        (function(){
            /*初始化Markdown编辑器*/
            if($('#editormd').length){
                var editor=editormd("editormd",{
                    height:500,
                    path:"/vendor/editor/lib/",
                    emoji:true,
                    dialogLockScreen:true,
                    dialogShowMask:true,
                    dialogDraggable:false,
                    dialogMaskOpacity:.7,
                    dialogMaskBgColor:"#000",
                    imageUpload:true,
                    imageFormats:["jpg","jpeg","gif","png","bmp","webp"],
                    imageUploadURL:'/common/file/uploadFile'
                });
                /*封面上传*/
                if($("#uploaderArea").length){
                    $("#uploaderArea").dmUploader({
                        url:'/common/file/uploadFile',
                        extraData:{
                            _token:$("input[name='_token']").val(),
                            filePlace:JSON.stringify({
                                module:'Article',
                                folderName:'articleCover'
                            })
                        },
                        onUploadSuccess:function(uploadId,data){
                            var dataObj=JSON.parse(data);
                            articleForm.$articleCover.val(data);
                            articleForm.$coverPreview.attr('src',dataObj['file_url']);
                        }
                    });
                }
                /*表单创建*/
                var articleForm={
                    $articleTitle:$("#articleTitle"),
                    $mainClassify:$("#articleMainClassify"),
                    $subClassify:$("#articleSubClassify"),
                    $articleCover:$('#articleCover'),
                    $submitButton:$("#submit"),
                    $coverPreview:$('#coverPreview'),
                    $articleSummary:$('#articleSummary'),
                    $articleOriginUrl:$('#articleOriginUrl'),
                    mainClassifyChange:function(){
                        var mainValue=$(this).val();
                        if(mainValue==0){
                            articleForm.subClassifyInit();
                        }else{
                            articleForm.subClassifyGetList(mainValue);
                            articleForm.$subClassify.parent().show();
                        }
                    },
                    subClassifyGetList:function(mainValue){
                        if($.isNumeric(mainValue)){
                            $.ajax({
                                url:"/admin/article/ajaxClassifyList",
                                type:"post",
                                data:{
                                    mainId:mainValue,
                                    _token:$("input[name='_token']").val()
                                },
                                success:function(data){
                                    var data=JSON.parse(data),subClassifyList;
                                    for(var i in data){
                                        subClassifyList+="<option value="+i+">"+data[i]+"</option>";
                                    }
                                    articleForm.$subClassify.empty().append(subClassifyList);
                                }
                            })
                        }
                    },
                    mainClassifyInit:function(){
                        this.$mainClassify.prepend('<option value="">主分类</option>').val(0), this.$mainClassify.change(this.mainClassifyChange)
                    },
                    subClassifyInit:function(){
                        this.$subClassify.empty().parent().hide()
                    },
                    submitFunc:function(i){
                        this.validClassify.call(this), i.call(this)
                    },
                    validClassify:function(){
                        /**
                         * 不能使用this.$mainClassify.val()
                         * 需要使用$("#articleMainClassify").val()
                         * 前者会缓存结果
                         */
                        if(!(articleForm.$articleTitle.val()
                                &&
                                articleForm.$mainClassify.val()
                                &&
                                articleForm.$articleCover.val()
                                &&
                                articleForm.$articleCover.val()
                                &&
                                articleForm.$articleSummary.val()
                                &&
                                editor.getMarkdown()
                            )){
                            return false;
                        }else{
                            return true;
                        }
                    },
                    init:function(){
                        this.mainClassifyInit();
                        this.subClassifyInit();
                        this.$submitButton.click(function(){
                            if(articleForm.validClassify()){
                                var data={
                                    _token:$("input[name='_token']").val(),
                                    article_title:articleForm.$articleTitle.val(),
                                    article_main_classify:articleForm.$mainClassify.val(),
                                    article_sub_classify:articleForm.$subClassify.val(),
                                    article_cover:articleForm.$articleCover.val(),
                                    article_summary:articleForm.$articleSummary.val(),
                                    article_content:editor.getMarkdown(),
                                    article_tags:$("#articleTags").val(),
                                    article_keywords:$('#articleKeywords').val(),
                                    article_origin_url:function(){
                                        return JSON.stringify(articleForm.$articleOriginUrl.val().split(','));
                                    }
                                };
                                if(location.href.indexOf('edit')>0){
                                    data['_method']='patch';
                                    data['article_id']=($('#legend').data())['src'];
                                }
                                $.ajax({
                                    url:"/admin/article/store",
                                    type:"post",
                                    data:data,
                                    success:function(data){
                                        if(data==1){
                                            alert('成功');
                                            location.href='/admin/article/create';
                                        }
                                    }
                                });
                            }else{
                                alert('标题,分类,配图,内容都不得为空');
                            }
                            return false;
                        })
                    }
                };
                articleForm.init();
            }
            /*解析Markdown*/
            if($('#mdContainer').length){
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
                /*解析文章来源*/
                var $originObj=$('#articleOriginSource');
                if($originObj.length){
                    try{
                        var originUrlObj=JSON.parse($originObj.text());
                        $('#articleOriginSource').text(
                            '作者:'+originUrlObj[0]+'\r\n 原文链接:'+originUrlObj[1]
                        ).attr('href',originUrlObj[1]);
                    }catch(e){
                        console.log('Bug:JSON字符串解析出错');
                    }

                }
            }
        }());


        /**
         *  Trash
         */
        (function(){
            window.global={

                $loading:$('.common_loading'),
                $modalTitle:$('#modalTitle'),
                $modalContent:$('#modalContent'),
                $modalCancelButton:$('#modalCancelButton'),
                $modalOkButton:$('#modalOkButton'),
                $dialogButton:$('#dialogButton'),
                $dialogClose:$('#modalClose'),

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

        /**
         * home_about_offer
         */
        if(window.location.pathname=="/home/about/offer"){
            (function(){
                $('#main div:first-child').removeClass('container');
                $('body').css({
                    marginBottom:$(window).height()-$('#rate').height()+"px"
                });
                $('#main').css({
                    marginLeft:$(window).width()*0.25
                })
                $('#sidebar-ul a').click(function(){
                    var href=$(this).attr('href');
                    $('html,body').animate({
                        scrollTop: $(href).offset().top-55+'px'
                    },500);
                    return false;
                });
            }())
        }
    });
}(window,jQuery));
