<?php
/**
* 
*/
require_once 'models/User.php';
class UserController
{
	
	function save_login()
	{	
		$email = $_POST['email'];
		$password = $_POST['password'];
		/*$u = User::where(['Email' ,'=', $email])
							->andWhere(['Password' , '=', $password])->first();*/
		$u = User::login($email,md5($password));
		if($u){
			$message = "";
			$_SESSION['user'] = [
				'name' => $u->Name
			];
			header("location: index.php");
		}
		else{
			$message = "Tài khoản hoặc mật khẩu không tồn tại";
		}
		include_once 'views/client/login.php';
	}
	function save_register(){
		$message = "";
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$comfirmPassword = $_POST['comfirmPassword'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$user = User::all();	
		foreach ($user as $u) {
			if($email == $u->Email){
				$message = "Email đã tồn tại";
				include_once 'views/client/register.php';
				die;
			}
		}
		if($name == "" || $surname == "" || $email == "" || $password == "" || $address == "" || $gender == ""){
			$message = "Không được để rỗng các trường";
			include_once 'views/client/register.php';
			die;
		}
		else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
			$message = "Email không hợp lệ";
			include_once 'views/client/register.php';
		}
		else if(strlen($password) < 6){
			$message = "Mật khẩu phải ít nhất 6 kí tự";
			include_once 'views/client/register.php';
		}
		else if($password != $comfirmPassword){
			$message = "Vui lòng kiểm tra mật khẩu khớp";
			include_once 'views/client/register.php';
		}		
		else{
			$models = new User();
			$models->Name = $name;
			$models->Surname = $surname;
			$models->Email = $email;
			$models->Password = md5($password);
			$models->Address = $address;
			$models->Gender = $gender;
			$models = $models->insert();
			/*$u1 = User::findID($email);*/
			$id = $u1->UserID;
			/*$u1->addUserRole($id);*/
			$_SESSION['user'] = [
				'name' => $name
			];
			header("Location: index.php");
		}
	}
}
?>