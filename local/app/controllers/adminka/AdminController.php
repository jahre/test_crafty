<?php

class AdminController extends BaseController {

	public function __construct(){
		parent::__construct();
		$this->beforeFilter('admin');
		$this->styles=array('media/css/style_admin.css');//не работает
		
	}
	public function getIndex(){
		return View::make('adminka.admin');
		
	}
    

}
