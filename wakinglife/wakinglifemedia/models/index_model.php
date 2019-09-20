<?php

class  Index_Model extends Model{
       function __construct()
{
	parent::__construct();
	
							
}

public function GetArticleList()
{
	$stmnt = $this->db->query("SELECT posts.id,posts.title, posts.image, category.Category FROM posts
							 JOIN category ON posts.CategoryId = category.CategoryId ");
							
							$stmnt->execute();
							$data = $stmnt->fetchAll(PDO::FETCH_ASSOC);
							return $data;
	
}
}