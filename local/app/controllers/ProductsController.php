<?php

class ProductsController extends BaseController {
	public function __construct(){
		parent::__construct();
		$this->sript[]='media/js/products.js';
	}
	public function getIndex(){
		$tovs=Product::where('showhide', '=', 1)
			->orderBy('id', 'DESC')
			->paginate(30);
		return view::make('products')->with('tovs',$tovs);
	}
}
