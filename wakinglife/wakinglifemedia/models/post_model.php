<?php

class  Post_Model extends Model{
       function __construct()
{
	parent::__construct();
}

public function GetPostList($id)
{
	$stmnt = $this->db->prepare("SELECT * FROM posts where id= ? ");
							
							$stmnt->execute(array($id));
							$data = $stmnt->fetch(PDO::FETCH_ASSOC);
							return $data;
	
}
}