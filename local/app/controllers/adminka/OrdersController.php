<?php

class OrdersController extends AdminController {
	
	
	public function getIndex(){
	
		$orders=Order::all();
	
		DB::table('checkout')->get(
            
            array('name'=>('name'),
					'phone'=>('phone'),
					'address'=>('address'),
					'serial'=>('serial')
			)        
            
		);
				
		$orders = DB::table('checkout')
			->orderBy('id', 'DESC')
			->paginate(30);
	
	
        return View::make('adminka.orders')->with('orders', $orders);
	}

}
