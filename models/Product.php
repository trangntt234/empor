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
		$sql = "SELECT attribute_values.Value
						FROM products
						JOIN product_attributes ON products.ProductID = product_attributes.ProductID
						JOIN attribute_values ON product_attributes.AttributeValueID = attribute_values.AttributeValueID
						JOIN attributes ON attributes.AttributeID = attribute_values.AttributeID
						where products.ProductID = $id and attributes.AttributeName = 'size' ";
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