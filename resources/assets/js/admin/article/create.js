/**
 * Created by zqq on 11/25/15.
 */
$(function(){
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
                    $.ajax({
                        url:"/admin/article/store",
                        type:"post",
                        data:{
                            _token:$("input[name='_token']").val(),
                            article_title:articleForm.$articleTitle.val(),
                            article_main_classify:articleForm.$mainClassify.val(),
                            article_sub_classify:articleForm.$subClassify.val(),
                            article_cover:articleForm.$articleCover.val(),
                            article_summary:articleForm.$articleSummary.val(),
                            article_content:editor.getMarkdown(),
                            article_tags:$("#articleTags").val(),
                            article_origin_url:function(){
                                return JSON.stringify(articleForm.$articleOriginUrl.val().split(','));
                            }
                        },
                        success:function(data){
                            if(data==1){
                                alert('成功');
                                location.reload();
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
});