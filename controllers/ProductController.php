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
		$s = $products->selectSize($_GET['id']);
		$combined = $products->selectCombined($_GET['id']);
		$pW = array();
		$pMacVoi = array();
		foreach ($combined as $key => $c) {
			$pW[$key]['idC'] = $c->CombinedProductID;
		}
		foreach ($pW as $key=>$value) {
			$pMacVoi[$key] = Product::find($pW[$key]['idC']);
		}
		/*var_dump($pMacVoi);*/
		
		include_once 'views/client/product-detail.php';
	}
	
}
?>