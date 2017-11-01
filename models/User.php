<?php 
require_once 'BaseModel.php';
/**
* 
*/
class User extends BaseModel
{
	public $tableName = 'users';
	public $columns = ['Email','Password','Name','Surname','Address','Gender'];
}
 ?>