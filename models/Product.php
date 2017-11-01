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
			$sql = "SELECT *
							FROM products
							JOIN product_attributes ON products.ProductID = product_attributes.ProductID
							JOIN attribute_values ON product_attributes.AttributeValueID = attribute_values.AttributeValueID
							JOIN attributes ON attributes.AttributeID = attribute_values.AttributeID
							where products.ProductID = $id";
			$stmt = $this->connect->prepare($sql);
			return $stmt->fetchAll();
			
		}
}
?>