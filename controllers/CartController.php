<?php
require_once 'models/Product.php';
/**
* 
*/
class CartController
{
	
	function addToCart()
	{  
        if(isset($_POST['id'])){
            $id = $_POST['id'];
            $size = $_POST['size'];
            if(isset($_SESSION['giohang']) && is_array($_SESSION['giohang'])){
                $count = count($_SESSION['giohang']);
                $flag = false;
                foreach ($_SESSION['giohang'] as $key => $value) { 
                    if($_SESSION['giohang'][$key]['id'] == $id && $_SESSION['giohang'][$key]['size'] == $size){
                        $_SESSION['giohang'][$key]['soluong'] += 1; 
                        $flag = true;
                        break;
                    }
                }
                if($flag == false){
                    $_SESSION['giohang'][$count]['id'] = $id;
                    $_SESSION['giohang'][$count]['soluong'] = 1;
                    $_SESSION['giohang'][$count]['size'] = $size;
                }

            }else{
                $_SESSION['giohang'] = array();
                $_SESSION['giohang'][0]['id'] = $id;
                $_SESSION['giohang'][0]['soluong'] = 1;
                $_SESSION['giohang'][0]['size'] = $size;
               
            }
        }
       
        include_once 'views/client/cart.php';

    }
    function remove(){
        if(isset($_GET['key'])){ 
            $keyDelete = $_GET['key'];
            foreach ($_SESSION['giohang'] as $key => $value) {
                if(array_key_exists($keyDelete,$_SESSION['giohang'])){
                    unset($_SESSION['giohang'][$keyDelete]);
                }
            }
            foreach ($_SESSION['giohang'] as $key => $value) {
                echo "Key: $key <br>";
            }
            include_once 'views/client/cart.php';
        }
    }
}
?>