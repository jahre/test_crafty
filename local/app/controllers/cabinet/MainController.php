<?php

class MainController extends BaseController {

	public function getIndex(){
		
		return View::make('cabinet.main');
		
	}

}
