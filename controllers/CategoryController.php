<?php
/**
* 
*/
require_once 'models/Product.php';
require_once 'models/Category.php';
class CategoryController
{
	public function index(){
		$cate = Category::getCate();
		$id = $_GET['id'];
		$pHot = Product::getHotProduct($id);
		$pD = Product::getDiscountProduct($id);
		$pNew = Product::getNewProduct($id);
		include_once 'views/client/cate-detail.php';
	}
}
?>