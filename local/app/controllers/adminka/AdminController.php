<?php

class AdminController extends BaseController {

	public function __construct(){
		parent::__construct();
		$this->beforeFilter('admin');
		$this->styles[]='media/css/style_admin.css';//не работает
		$this->scripts[]='media/js/admin.js';//не работает
		
		
	}
	public function getIndex(){
		return View::make('adminka.admin');
		
	}
    

}
