<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$sportscars=new mySubcategory();
	$sportscars->setMySubcategory("cars", "Cars", "sportscars", "Sports Cars");
	$sportscars->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$sportscars->printsubcategoryHTML($_GET['choice']);
	else
		$sportscars->printsubcategoryHTML("none");
		
	$sportscars->printAfterMainCategory();

?>
</html>