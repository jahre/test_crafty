<?php

class CartController extends BaseController {
	public function postIndex($id){
		
		$id = (int)$id;
		$_POST['colvo']=(int)$_POST['colvo'];
		
		
		//$tempCookie = Cookie::make($id, $_POST['colvo'], 3600);
		//return Redirect::to('cart/index')->withCookie($tempCookie);
		setCookie($id, $_POST['colvo'], time()+3600, '/');
		return Redirect::to('products');
	}
	
	
	public function getIndex(){
		return view::make('cart');
	}
	
	public function postDelete($id){
		setCookie($id, null, time()-3600, '/');
		return Redirect::to('cart/index');
	}
	
	public function postEdit($id){
		//echo $id;
		//echo $_POST['colvo'];
		setCookie($id, null, time()-3600, '/');
		setCookie($id, $_POST['colvo'], time()+3600, '/');
		return Redirect::to('cart/index');
	}
	
	
	
}
