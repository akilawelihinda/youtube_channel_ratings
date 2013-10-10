<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$computers=new mySubcategory();
	$computers->setMySubcategory("productreviews", "Product Reviews", "computers", "Computers");
	$computers->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$computers->printsubcategoryHTML($_GET['choice']);
	else
		$computers->printsubcategoryHTML("none");
		
	$computers->printAfterMainCategory();

?>
</html>