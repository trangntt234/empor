<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');
session_start();
/*session_destroy();*/
$url = isset($_GET['url']) == true ? $_GET['url'] : "/";
function getUrl($path = ""){
	$currentUrlpath = $GLOBALS['url'];
	$absoluteUrl = strtok("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]",'?');
	$absoluteUrl = str_replace("index.php", "", $absoluteUrl);
	if($currentUrlpath != "/"){
		$absoluteUrl = str_replace("$currentUrlpath", "", $absoluteUrl);
	}
	return $path == "/" ? $absoluteUrl : $absoluteUrl.$path;
}
define('CSS_PATH', 'http://localhost/php/empor/public/css/');
define('METRONIC', 'http://localhost/php/empor/public/metronic/');
require_once 'routes/CustomRoute.php';
CustomRoute::clientRoute($url);
?>