<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$bodybuilders=new mySubcategory();
	$bodybuilders->setMySubcategory("fitness", "Fitness", "bodybuilders", "Body Builders");
	$bodybuilders->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$bodybuilders->printsubcategoryHTML($_GET['choice']);
	else
		$bodybuilders->printsubcategoryHTML("none");
		
	$bodybuilders->printAfterMainCategory();

?>
</html>