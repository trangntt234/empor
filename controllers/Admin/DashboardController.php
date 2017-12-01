<?php
	/**
	* 
	*/
	class DashboardController
	{
		function index()
		{
			if(isset($_SESSION['userAdmin'])){
				include_once 'views/admin/metronic.php';
			}else{
				$message = "";
				include_once 'views/admin/auth/login.php';
			}
		}
	}
?>