<?php
require_once 'BaseModel.php';
/**
* 
*/
class Product extends BaseModel
{	
	public $tableName = 'products';
	public $columns = ['ProductName','CategoryID','Image','Quantity','Price','UnitsInStock','UnitOnOrder','Discount','Hot','Description'];
}
?>