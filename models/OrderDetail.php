<?php
require_once 'models/BaseModel.php';
/**
* 
*/
class OrderDetail extends BaseModel
{
	public $tableName = 'orderdetails';
	public $columns = ['OrderID','ProductID','Size','Quantity'];
}
?>