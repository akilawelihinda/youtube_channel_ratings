<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$tablets=new mySubcategory();
	$tablets->setMySubcategory("productreviews", "Product Reviews", "tablets", "Tablets");
	$tablets->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$tablets->printsubcategoryHTML($_GET['choice']);
	else
		$tablets->printsubcategoryHTML("none");
		
	$tablets->printAfterMainCategory();

?>
</html>