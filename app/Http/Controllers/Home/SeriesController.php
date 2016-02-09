<?php
namespace App\Http\Controllers\Home;
use App\Article;
use App\ArticleSeries;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Common\Controller;
class SeriesController extends Controller{
	/**
	 * Display a listing of the resource.
	 * @return \Illuminate\Http\Response
	 */
	public function index(){

	}

	/**
	 * Show the form for creating a new resource.
	 * @return \Illuminate\Http\Response
	 */
	public function create(){
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * @param  \Illuminate\Http\Request $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request){
		//
	}

	/**
	 * Display the specified resource.
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id){
		$series=ArticleSeries::find($id);
		$series['articleList']=Article::getSeriesArticle($series->series_name);
		return view('home.series.show',compact('series'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id){
		//
	}

	/**
	 * Update the specified resource in storage.
	 * @param  \Illuminate\Http\Request $request
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request,$id){
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id){
		//
	}
}
