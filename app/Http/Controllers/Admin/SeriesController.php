<?php
namespace App\Http\Controllers\Admin;
use App\Article;
use App\ArticleClassify;
use App\ArticleSeries;
use App\Http\Requests;
use App\Http\Controllers\Common\Controller;
class SeriesController extends Controller{
	/**
	 * Display a listing of the resource.
	 * @return \Illuminate\Http\Response
	 */
	public function index(){
		$seriesList=ArticleSeries::all();
		return view('admin.series.index',compact('seriesList'));
	}

	/**
	 * Show the form for creating a new resource.
	 * @return \Illuminate\Http\Response
	 */
	public function create(){
		$classifyList=ArticleClassify::getClassifyList(0);
		return view('admin.series.create',compact('classifyList'));
	}

	/**
	 * Store a newly created resource in storage.
	 * @return \Illuminate\Http\Response
	 */
	public function store(){
		echo ArticleSeries::create(\Request::all());
	}

	/**
	 * Display the specified resource.
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id){

	}

	/**
	 * Show the form for editing the specified resource.
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id){
		$series=ArticleSeries::find($id);
		$classifyList=ArticleClassify::getClassifyList(0);
		return view('admin.series.edit',compact('series','classifyList'));
	}

	/**
	 * Update the specified resource in storage.
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(){
		$data=\Request::all();
		if(gettype(json_decode(\Request::input('series_cover')))=='NULL'){
			unset($data['series_cover']);
		}
		$series=ArticleSeries::find(\Request::input('series_id'));
		echo $series->update($data);
	}

	/**
	 * Remove the specified resource from storage.
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id){
		//
	}

	public function ajaxClassifyList(){
		if(\Request::Ajax()){
			echo json_encode(ArticleClassify::getClassifyList(\Request::input('mainId')));
			exit();
		}
	}
}
