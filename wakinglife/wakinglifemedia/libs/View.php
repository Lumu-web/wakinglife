<?php

class  View{
       function __construct()
{
	
}

public function render($name, $arg = false)
{
require 'views/header.php';
require 'views/' . $name . '.php';
require 'views/footer.php';
	
}
}