<?php 
/**
* 
*/
require_once 'controllers/HomeController.php';
require_once 'controllers/ProductController.php';
require_once 'controllers/UserController.php';
class CustomRoute
{
	static function clientRoute($url)
	{
		switch ($url) {
			case '/': // trang chu
				$ctl = new HomeController();
				$ctl->index();
				break;
			case 'product-detail':
				$ctl = new ProductController();
				$ctl->detail();
				break;
			case 'logout':
				unset($_SESSION['user']);
				header('location: index.php');
				break;
			case 'login':
				$message = "";
				include_once 'views/client/login.php';
				break;
			case 'save-login':
				$ctl = new UserController();
				$ctl->save_login();
				break;
			case 'register':
				$message = "";
				include_once 'views/client/register.php';
				break;
			case 'save-register':
				$ctl = new UserController();
				$ctl->save_register();
				break;
			default:
				echo "<h1>Not found!</h1>";
				break;
		}
	}
}
 ?>