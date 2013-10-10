<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$tennis=new mySubcategory();
	$tennis->setMySubcategory("sports", "Sports", "tennis", "Tennis");
	$tennis->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$tennis->printsubcategoryHTML($_GET['choice']);
	else
		$tennis->printsubcategoryHTML("none");
		
	$tennis->printAfterMainCategory();

?>
</html>