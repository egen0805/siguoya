<?php

namespace App\Http\Controllers\Common;
use Illuminate\Http\Request;
use App\Http\Requests;
class FileController extends Controller
{
	/**
	 * 需要提交过来的数据规范:
	 * (1)文件字段name为file
	 * (2)请求数据
	 * string _token:权限验证
	 * json filePlace:
	 * {
	 *    module:模块名称
	 *    module:存储文件的文件夹
	 * }
	 * (3)返回格式,普通格式 or 编辑器格式
	 * @param Request $request
	 */
    public function uploadFile(Request $request){
	    if ($request->hasFile('file')) {
		    $fileObj=json_decode($request->input('filePlace'));
		    $uploadRoot='upload/';
		    $fileFolder=$uploadRoot.$fileObj->module.'/'.$fileObj->folderName.'/'.date('Ymd');
		    $fileOriginName=$request->file('file')->getClientOriginalName();
		    $filePlaceName=time().$fileOriginName;
		    if(!file_exists($fileFolder)){
			    if(is_writable($uploadRoot)){
				    mkdir($fileFolder,0777,true);
			    }else{
				    exit('目录不可写!');
			    }
		    }
		    if($request->file('file')->move($fileFolder,$filePlaceName)){
			    echo $request->input('editor')?json_encode([
				    //用于返回给editormd
				    'success'=>1,
				    'message'=>'上传成功',
				    'url'=>'/'.$fileFolder.'/'.$filePlaceName
			    ]):json_encode([
				    'file_name'=>$fileOriginName,
				    'file_url'=>'/'.$fileFolder.'/'.$filePlaceName,
			    ]);
		    }
	    }else{
		    exit('文件上传失败');
	    }
    }
}
