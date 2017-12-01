<?php
require_once  'models/Category.php';
class AdminCateController
{	
	public function index(){
		$cates = Category::all();
		include_once 'views/admin/cate.php';
	}
	public function remove(){
		$id = $_GET['id'];
		$cate = Category::findCate($id);
		if(!$cate){
			echo "<h1>Sản phẩm không tồn tại</h1>";
			die;
		}
		$cate->deleteCate();
		/*include_once 'views/admin/cate.php';*/
		header("Location: listcate");
	}
	public function edit(){
		$message = "";
		$id = $_GET['id'];
		$cate = Category::findCate($id);
		$cates = Category::all();
		include_once 'views/admin/edit-cate.php'; 
	}
	public function add(){
		$message = "";
		$cates = Category::all();
		include_once 'views/admin/add-cate.php'; 
	}
	public function save_add(){
		$message = "";
		$name = $_POST['name'];
		$parent_id = $_POST['parent_id'];
		$is_menu = $_POST['is_menu'];
		$desc = $_POST['desc'];
		$cate = new Category();
		if($name == ""){
			$message = "Tên không đc rỗng";
			$cates = Category::all();
			include_once 'views/admin/add-cate.php'; 
			die;
		}
		$cate->CategoryName = $name;
		$cate->ParentID = $parent_id;
		$cate->Description = $desc;
		$cate->IsMenu = $is_menu;
		$cate = $cate->insert();
		if(!$cate){
			echo 'Thêm mới thất bại';
			die;
		}
		header("Location: listcate");
	}
	public function save_edit(){
		$message = "";
		if(isset($_POST['save'])){
			$id = $_POST['id'];
			$name = $_POST['name'];
			$parent_id = $_POST['parent_id'];
			$is_menu = $_POST['is_menu'];
			$desc = $_POST['desc'];
			$cate = Category::findCate($id);
			if($name == ""){
				$cates = Category::all();
				$message = "Tên không đc rỗng";
				include_once 'views/admin/edit-cate.php';
			}else{
				if(!$cate){
					echo 'Không tìm thấy danh mục';
					die;
				}
				$cate->CategoryName = $name;
				$cate->ParentID = $parent_id;
				$cate->Description = $desc;
				$cate->IsMenu = $is_menu;
				$cate->updateCate();
				header("Location: listcate");
			}
		}
	}
}
?>