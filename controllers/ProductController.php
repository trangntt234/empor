<?php
require_once 'models/Product.php';
/**
* 
*/
class ProductController 
{
	function detail()
	{
		$products = Product::find($_GET['id']);
		$s = Product::selectSize($_GET['id']);die;
		include_once 'views/client/product-detail.php';
	}
}
?>