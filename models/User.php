<?php 
require_once 'BaseModel.php';
/**
* 
*/
class User extends BaseModel
{
	public $tableName = 'users';
	public $columns = ['Email','Password','Name','Surname','Address','Gender'];
	/*public function addUserRole($id){
		$sql = "INSERT INTO user_roles (UserID, RoleID) VALUES ($id,1)";
		$stmt = $this->connect->prepare($sql);
		$stmt->execute();
	}*/
}
 ?>