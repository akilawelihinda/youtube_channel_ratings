<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$cs=new mySubcategory();
	$cs->setMySubcategory("education", "Education", "computerscience", "Computer Science");
	$cs->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$cs->printsubcategoryHTML($_GET['choice']);
	else
		$cs->printsubcategoryHTML("none");
		
	$cs->printAfterMainCategory();
?>
</html>