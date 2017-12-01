<?php
/**
* 
*/
require_once 'models/Category.php';
require_once 'models/Order.php';
require_once 'models/OrderDetail.php';
class OrderController
{
	function index(){
		$message = "";
		$cate = Category::getCate();
		if(empty($_SESSION['giohang'])){
			include_once 'views/client/cart.php';
		}else{
			include_once 'views/client/order.php';
		}
	}
	function save_order(){
		$cate = Category::getCate();
		$message = "";
		if(isset($_POST['order']) && isset($_SESSION['giohang'])){			
			$email = $_POST['email'];
			$sdt = $_POST['sdt'];
			$ten = $_POST['ten'];
			$ho = $_POST['ho'];
			$diachi = $_POST['diaChi'];
			$ghichu = $_POST['ghiChu'];
			$orderDate = date('Y-m-d H:i:s');
			$shipDate = $_POST['ngayship'];
			if($orderDate > $shipDate){
				$message = "Vui lòng chọn đúng ngày ship";
				include_once 'views/client/order.php';
				die;
			}
			$totalPrice = $_POST['totalPrice'];
			$count = count($_SESSION['giohang']);
			foreach ($_SESSION['giohang'] as $key => $gh) {
				$productID = $_SESSION['giohang'];
			}
			$productID = $_SESSION['giohang'];
			$models = new Order();
			if(isset($_SESSION['user'])){
				$userID = $_SESSION['user']['id'];
				$models->UserID = $userID;
				$models->OrderDate = $orderDate;
				$models->ShippedDate = $shipDate;
				$models->OrdererEmail = "";
				$models->ReceiverName = $ten;
				$models->ReceiverSurname = $ho;
				$models->OrdererPhone = $sdt;
				$models->ReceiverAddress = $diachi;
				$models->Ghichu = $ghichu;
				$models->TotalPrice = $totalPrice;
				$models->TinhTrang = 0;
				$models = $models->insert();
			}else{
				$models->UserID = "";
				$models->OrderDate = $orderDate;
				$models->ShippedDate = $shipDate;
				$models->OrdererEmail = $email;
				$models->ReceiverName = $ten;
				$models->ReceiverSurname = $ho;
				$models->OrdererPhone = $sdt;
				$models->ReceiverAddress = $diachi;
				$models->Ghichu = $ghichu;
				$models->TotalPrice = $totalPrice;
				$models->TinhTrang = 0;
				$models = $models->insert();
			}
			$id = Order::getIDLast();
			$od = new OrderDetail();
			foreach ($_SESSION['giohang'] as $key => $gh) {
				$od->OrderID = $id->maxid;
				$od->ProductID = $_SESSION['giohang'][$key]['id'];
				$od->Size = $_SESSION['giohang'][$key]['size'];
				$od->Quantity = $_SESSION['giohang'][$key]['soluong'];
				$od = $od->insert();
			}
			unset($_SESSION['giohang']);
			include_once 'views/client/order-success.php';	
		}
	}
}
?>