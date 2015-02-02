<?php

class TableController extends AdminController {

	public function getIndex(){
		$product = new Product();
		
		$products=Product::all();
		DB::table('products')->get(
            
            array('title'=>('title'),
					'price'=>('price'),
					'quantity'=>('quantity'),
					'description'=>('description')
			)        
            
		);
				
		$products = DB::table('products')
			->orderBy('id', 'DESC')
			->paginate(5);
	
        return View::make('adminka.table')->with('products', $products);
	}
	
}
