<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$wrestling=new mySubcategory();
	$wrestling->setMySubcategory("sports", "Sports", "wrestling", "Wrestling");
	$wrestling->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$wrestling->printsubcategoryHTML($_GET['choice']);
	else
		$wrestling->printsubcategoryHTML("none");
		
	$wrestling->printAfterMainCategory();

?>
</html>