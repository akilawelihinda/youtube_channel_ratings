<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$laptops=new mySubcategory();
	$laptops->setMySubcategory("productreviews", "Product Reviews", "laptops", "Laptops");
	$laptops->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$laptops->printsubcategoryHTML($_GET['choice']);
	else
		$laptops->printsubcategoryHTML("none");
		
	$laptops->printAfterMainCategory();

?>
</html>