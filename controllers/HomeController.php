<?php
/**
* 
*/
require_once 'models/Product.php';
class HomeController
{
	
	function index()
	{
		$pHot = Product::hot();
		$pDiscount = Product::discount();
		$pNew = Product::new();
		include_once 'views/client/homepage.php';
	}
}
?>