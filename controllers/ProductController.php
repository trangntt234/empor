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
		include_once 'views/client/product-detail.php';
	}
}
?>