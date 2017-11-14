<?php 
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
require_once 'routes/CustomRoute.php';
CustomRoute::clientRoute($url);
?>