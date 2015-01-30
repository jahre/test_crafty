<?php

class ItemsController extends AdminController {

	public function getIndex(){
		//return View::make('adminka.table');
        echo 'test';
	}
	public function postItems(){
		
		$item = new Item();
		
		$items=Item::all();
		DB::table('items')->insert(
            
            array('title'=>Input::get('title'),
					'price'=>Input::get('price'),
					'quantity'=>Input::get('quantity'),
					'description'=>Input::get('description')
			)        
            
		);
        
	
        }
}
