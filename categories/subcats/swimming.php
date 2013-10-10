<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$swimming=new mySubcategory();
	$swimming->setMySubcategory("sports", "Sports", "swimming", "Swimming");
	$swimming->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$swimming->printsubcategoryHTML($_GET['choice']);
	else
		$swimming->printsubcategoryHTML("none");
		
	$swimming->printAfterMainCategory();

?>
</html>