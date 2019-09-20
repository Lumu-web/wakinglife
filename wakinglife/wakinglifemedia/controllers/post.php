<?php

class Post extends Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function index()
	{
		require_once 'models/post_model.php';
		$model = new Post_Model();
		
		$this->view->render('post/index');
		
	}
	
	public function readpost($arg = false){
		
		
		require_once 'models/post_model.php';
		$model = new Post_Model();
		$data = $model->GetPostList($arg);
		$this->view->render('post/index',$data);
		
	}
} 
