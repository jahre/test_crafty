<?php

class AjaxController extends BaseController {
	public function __construct(){
		parent::__construct();
	}
	public function getIndex(){
		return 'test ajax';
	}
}
