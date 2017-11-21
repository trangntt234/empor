<?php
/**
* 
*/
require_once 'models/Product.php';
require_once 'models/Category.php';
class HomeController
{	
	function index()
	{
		$pHot = Product::hot();
		$pDiscount = Product::discount();
		$pNew = Product::new();
		//seclect category
		$cate = Category::getCate();
		include_once 'views/client/homepage.php';
	}
}
?>