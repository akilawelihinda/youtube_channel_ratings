<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$phones=new mySubcategory();
	$phones->setMySubcategory("productreviews", "Product Reviews", "phones", "Phones");
	$phones->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$phones->printsubcategoryHTML($_GET['choice']);
	else
		$phones->printsubcategoryHTML("none");
		
	$phones->printAfterMainCategory();

?>
</html>