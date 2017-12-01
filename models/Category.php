<?php
require_once 'models/BaseModel.php';
/**
* 
*/
class Category extends BaseModel
{
	public $tableName = 'categories';
	public $columns = ['categoryId','categoryName','parentId','description','isMenu'];
}
?>