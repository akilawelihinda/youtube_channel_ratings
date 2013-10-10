<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$watches=new mySubcategory();
	$watches->setMySubcategory("productreviews", "Product Reviews", "watches", "Watches");
	$watches->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$watches->printsubcategoryHTML($_GET['choice']);
	else
		$watches->printsubcategoryHTML("none");
		
	$watches->printAfterMainCategory();

?>
</html>