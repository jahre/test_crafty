<?php

class StaticController extends BaseController {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	public function __construct(){
		parent::__construct();
	}
	 
	public function getIndex($id='index'){
		$text=DB::table('maintexts')
		->where('url','=', $id)
		->first();
		
		/*return View::make('static', array('text'=>$text));*/
		
		return View::make('static')->with('text', $text);
	}
	

}
