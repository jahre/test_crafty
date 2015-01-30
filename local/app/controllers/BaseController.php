<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	 public $title=null;
	 public $keywords=null;
	 public $description=null;
	 public $styles=array();
	 public $scripts=array();
	 public $menu = '';
	 
	public function __construct(){
		view::composer(['layouts.default'], function($view){
		$this->title='Crafty';
		$this->description='TestSite1';
		$this->styles=array('media/css/reset.css','media/css/main_responsive.css', 'media/css/style_admin.css');
		$this->scripts=array('media/js/jquery.js','media/js/carouFredSel.js', 'media/js/main.js');
		$this->cabinet=false;
		if(Auth::check()){
			$this->cabinet=true;
		}
		$view->with('styles', $this->styles)
			 ->with('scripts', $this->scripts)
			 ->with('description', $this->description)
			 ->with('cabinet', $this->cabinet)
			 ->with('title', $this->title)
			 ->with('menu', $this->menu);
			 
		
	 
		
			 
		});
		
		
	}
	
	 
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}
	

}
