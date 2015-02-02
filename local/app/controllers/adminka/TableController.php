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
	
	//http://image.intervention.io/getting_started/installation
	
	protected function _img_edit($file, $cat){
		$destinationPath='media/uploads/'.$cat.'/';
		if(!$destinationPath){
			@mkdir($destinationPath, 0777);
		}
		$filename=date('y_m_d_h_i_s').'.'.$file->getClientOriginalExtension();
		$upload_success=$file->move($destinationPath, $filename);
		
		if($upload_success){
			
			$im = Image::make($destinationPath. $filename);
			$im->resize(200, null, function($con){
				$con->aspectRatio();
			});
			$pic_small = 's'.$filename;
			$im->save($destinationPath.$pic_small);
			return $filename;
		}else{
		return false;
		}
		
	}
	
	public function postAdd(){
		$data = Input::all();
		$rules = array(
			'name'=>array('required')
		);
		$validation=Validator::make($data, $rules);
		if($validation->fails()){
			$errors=$validation->message();
		}
		if(!empty($errors)){
			return Redirect::to('adminka/table/add')->with($errors);
		}
		if(empty($errors)){
						
			$file=Input::file('file');
			if(!empty($file)){
				$picture=$this->_img_edit($file, 'photos');
				$picture_small='s'.$picture;
			}
			DB::table('products')->insert(
				array('title'=>$data['name'],
					'img'=>$picture,
					'created_at'=>date('y-m-d h:i:s'),
					'updated_at'=>date('y-m-d h:i:s'),
					'showhide'=>1
				)
			);
			
		}
		return Redirect::to('adminka/table');
	}
	
	
	
	
}
