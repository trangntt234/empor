<?php
require_once 'models/BaseModel.php';
/**
* 
*/
class Product extends BaseModel
{	
	public $tableName = 'products';
	public $columns = ['ProductName','CategoryID','Image','Quantity','Price','UnitsInStock','UnitOnOrder','Discount','Hot','Description'];
	/*public function __construct(){
		parent::__construct();
	}*/
	public function selectSize($id){
		$sql = "SELECT sizes.SizeID, sizes.SizeName FROM sizes 
									JOIN productsizes ON sizes.SizeID = productsizes.SizeID
                                    JOIN products ON productsizes.ProductID = products.ProductID
                                   	WHERE products.ProductID = $id";
		$stmt = $this->connect->prepare($sql);
		$stmt->execute();
		$rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
		return $rs;
	}
	public function selectCombined($id){
		$sql = "SELECT combined.CombinedProductID 
				FROM `products` 
				JOIN combined ON products.ProductID = combined.ProductID 
				WHERE products.ProductID = $id";
		$stmt = $this->connect->prepare($sql);
		$stmt->execute();
		$rs = $stmt->fetchAll(PDO::FETCH_CLASS, get_class($this));
		return $rs;
	}
}
?>