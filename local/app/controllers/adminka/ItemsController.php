<?php

class ItemsController extends AdminController {

	public function getIndex(){
        
	}
	public function postItems(){
		
		$product = new Product();
		
		$products=Product::all();
		DB::table('products')->insert(
            
            array('title'=>Input::get('title'),
					'price'=>Input::get('price'),
					'quantity'=>Input::get('quantity'),
					'description'=>Input::get('description')
			)        
            
		);
		return Redirect::to('/adminka');
		
		
}
	public function getDelete($id){
		
	
		DB::table('products')
           ->where('id', '=', $id)
		   ->delete();
           
		return Redirect::to('adminka/table');   
            
				
}

	public function getShow($id){
			
			DB::table('products')->where('id', '=', $id)->update(
			  array('showhide'=>1)
			   );
			return Redirect::to('adminka/table');   
				
					
	}
	
	public function getHide($id){
			
			DB::table('products')->where('id', '=', $id)->update(
			  array('showhide'=>0)
			   );
			return Redirect::to('adminka/table');   
				
					
	}

}
