<?php
require_once 'models/BaseModel.php';
/**
* 
*/
class Category extends BaseModel
{
	public $tableName = 'categories';
	public $columns = ['CategoryID','CategoryName','ParentID','Description','IsMenu'];
}
?>