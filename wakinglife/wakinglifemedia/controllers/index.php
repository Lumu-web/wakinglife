<?php 

class Index extends Controller{
	
	function __construct(){
		parent::__construct();
		
	}
	
	function index()
	{
		require_once 'models/index_model.php';
		$model = new Index_Model();
		$data = $model->GetArticleList();
		$this->view->render('index/index',$data);
		
	}
}
	
