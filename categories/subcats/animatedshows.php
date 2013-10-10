<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$animatedshows=new mySubcategory();
	$animatedshows->setMySubcategory("tvshows", "TV Shows", "animatedshows", "Animated Shows");
	$animatedshows->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$animatedshows->printsubcategoryHTML($_GET['choice']);
	else
		$animatedshows->printsubcategoryHTML("none");
		
	$animatedshows->printAfterMainCategory();

?>
</html>