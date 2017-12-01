<?php
/**
* 
*/
require_once 'models/User.php';
class AdminController
{
	function save_login()
	{	
		$email = $_POST['email'];
		$password = $_POST['password'];
		$u = User::where(['Email' ,'=', $email])
							->andWhere(['Password' , '=', md5($password)])->andWhere(['Role' , '=', 1])->first();
		/*$u = User::login($email,md5($password));*/
		if($u){
			$message = "";
			$_SESSION['userAdmin'] = [
				'name' => $u->Name
			];
			/*include_once 'views/admin/metronic.php'*/
			header("Location: metronic.php");
		}
		else{
			$message = "Tài khoản hoặc mật khẩu không tồn tại";
			include_once 'views/admin/auth/login.php';
		}
	}
}
?>