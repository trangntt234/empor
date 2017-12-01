<?php 
/**
* 
*/
require_once 'controllers/HomeController.php';
require_once 'controllers/ProductController.php';
require_once 'controllers/Auth/UserController.php';
require_once 'controllers/CartController.php';
require_once 'controllers/CategoryController.php';
require_once 'controllers/OrderController.php';
require_once 'controllers/Admin/DashboardController.php';
require_once 'controllers/Admin/Auth/AdminController.php';
require_once 'controllers/Admin/AdminCateController.php';
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
				unset($_SESSION['giohang']);
				header('location: index.php');
				break;
			case 'login':
				$message = "";
				include_once 'views/client/auth/login.php';
				break;
			case 'save-login':
				$ctl = new UserController();
				$ctl->save_login();
				break;
			case 'register':
				$message = "";
				include_once 'views/client/auth/register.php';
				break;
			case 'save-register':
				$ctl = new UserController();
				$ctl->save_register();
				break;
			case 'add-to-cart':
				$ctl = new CartController();
				$ctl->addToCart();
				break;
			case 'danh-muc-san-pham':
				$ctl = new CategoryController();
				$ctl->index();
				break;
			case 'thanh-toan':
				$message = "";
				$ctl = new OrderController();
				$ctl->index();
				break;
			case 'save-order':
				$message = "";
				$ctl = new OrderController();
				$ctl->save_order();
				break;
			case 'save-thanh-toan':
				$ctl = new OrderController();
				$ctl->save();
				break;
			case 'order-success':
				$cate = Category::getCate();
				include_once 'views/client/order-success.php';
				break;
			case 'search-product':
				$ctl = new HomeController();
				$ctl->search();
				break;
			case 'admin':
				$ctl = new DashboardController();
				$ctl->index();
				break;
			case 'admin/metronic.php':
				$ctl = new DashboardController();
				$ctl->index();
				break;
			case 'admin/login':
				$message = "";
				include_once 'views/admin/auth/login.php';
				break;
			case 'admin/save-login':
				$ctl = new AdminController();
				$ctl->save_login();
				break;
			case 'admin/listcate':
				$ctl = new AdminCateController();
				$ctl->index();
				break;
			case 'admin/remove-cate':
				$ctl = new AdminCateController();
				$ctl->remove();
				break;
			case 'admin/edit-cate':
				$ctl = new AdminCateController();
				$ctl->edit();
				break;
			case 'admin/add-cate':
				$ctl = new AdminCateController();
				$ctl->add();
				break;
			case 'admin/save-add-cate':
				$ctl = new AdminCateController();
				$ctl->save_add();
				break;
			case 'admin/save-edit-cate':
				$ctl = new AdminCateController();
				$ctl->save_edit();
				break;
			default:
				echo "<h1>Not found!</h1>";
				break;
		}
	}
}
 ?>