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
				'id' => $u->UserID,
				'name' => $u->Name,
				'email' => $u->Email
			];
			header("location: index.php");
		}
		else{
			$message = "Tài khoản hoặc mật khẩu không tồn tại";
		}
		include_once 'views/client/auth/login.php';
	}
	function save_register(){
		$message = "";
		$name = $_POST['ten'];
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
				include_once 'views/client/auth/register.php';
				die;
			}
		}	
		$models = new User();
		$models->Name = $name;
		$models->Surname = $surname;
		$models->Email = $email;
		$models->Password = md5($password);
		$models->Address = $address;
		$models->Gender = $gender;
		$models->Role = 0;
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
?>