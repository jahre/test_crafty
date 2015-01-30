<?php

class AuthController extends BaseController {

	public function getIndex(){}
	public function getReg(){
	
		return View::make('auth.reg');
		
	}
	
	
	
	public function postReg(){
		$rules = array(
			'username'=>array('required','unique:users,username'),
			'password'=>array('required', 'min:7'),
			'email'=>array('required', 'min:5')
		);
		$validation = Validator::make(Input::all(), $rules);
		if($validation->fails()){
			$errors = $validation->messages();
			if($errors){
			return Redirect::to('auth/reg')->withErrors($errors);
		}
		}	
		
		
		$user = new User();
		
		DB::table('users')->insert(
			array('username'=>Input::get('username'),
					'email'=>Input::get('email'),
					'password'=>Hash::make(Input::get('password')),
					'created_at'=>date('y-m-d h:i:s')
			)
		);
		return Redirect::to('/');
	}
	
	public function postLogin(){
		$data  = array(
			'username'=>Input::get('username'),
			'password'=>Input::get('password')
		);
		$auth = Auth::attempt($data, false);
		if(!$auth){
			return Redirect::to('auth/reg')->withErrors(array('error2'));
		}
		return View::make('cabinet.main');
		
		
	}
	
	public function getLogout(){
		if(Auth::check()){
			Auth::logout();
			echo 'logged out';
			return Redirect::to('/');
			
		}
	}
	

}
