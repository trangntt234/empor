<?php
require_once 'models/Product.php';
/**
* 
*/
class CartController
{
	
	function addToCart()
	{
        /*if (!isset($_SESSION['cart'])) {
            $cart            = array();
            $_SESSION['cart'] = $cart; 
        }
        $cart = $_SESSION['cart'];
        if(isset($_POST['id'])){
            $size = $_POST['size'];
            $color = $_POST['color'];
            $p = Product::find($_POST['id']);
            $productid = $_POST['id'];
            //id da ton tai trong gio thi k them ma tang slg
            if (array_key_exists($productid, $cart) && $cart[$productid][2] == $size) {
                $cart[$productid][1] += 1;
            }else if(array_key_exists($productid, $cart) && $cart[$productid][2] != $size){
                $cart[$productid] = array($p->ProductID, 1,$size,$color,$p->ProductName, $p->Price,$p->Image);
            }else{

            }
            $cart =[
                    'id'->$productid,
                    'size'->$size
            ];
            $_SESSION['cart'] = $cart;
        }
        var_dump($cart);*/
        $total = 0;
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $size = $_POST['size'];
            $color = $_POST['color'];
            if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])){
                $count = count($_SESSION['giohang']);
                $flag = false;
                for ($i=0; $i < $count; $i++) { 
                    if($_SESSION['giohang'][$i]['id'] == $id && $_SESSION['giohang'][$i]['size'] == $size && $_SESSION['giohang'][$i]['color'] == $color){
                        $_SESSION['giohang'][$i]['soluong'] += 1; 
                        $flag = true;
                        break;
                    }
                }
                if($flag == false){
                    $_SESSION['giohang'][$count]['id'] = $id;
                    $_SESSION['giohang'][$count]['soluong'] = 1;
                    $_SESSION['giohang'][$count]['size'] = $size;
                    $_SESSION['giohang'][$count]['color'] = $color;
                }

            }else{
                $_SESSION['giohang'] = array();
                $_SESSION['giohang'][0]['id'] = $id;
                $_SESSION['giohang'][0]['soluong'] = 1;
                $_SESSION['giohang'][0]['size'] = $size;
                $_SESSION['giohang'][0]['color'] = $color;

            }
        }
        include_once 'views/client/cart.php';
    }
}
?>