<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$food=new mySubcategory();
	$food->setMySubcategory("tvshows", "TV Shows", "food", "Food");
	$food->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$food->printsubcategoryHTML($_GET['choice']);
	else
		$food->printsubcategoryHTML("none");
		
	$food->printAfterMainCategory();

?>
</html>