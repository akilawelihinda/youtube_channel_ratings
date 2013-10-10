<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$computerparts=new mySubcategory();
	$computerparts->setMySubcategory("productreviews", "Product Reviews", "computerparts", "Computer Parts");
	$computerparts->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$computerparts->printsubcategoryHTML($_GET['choice']);
	else
		$computerparts->printsubcategoryHTML("none");
		
	$computerparts->printAfterMainCategory();

?>
</html>