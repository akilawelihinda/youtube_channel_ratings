<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$musclecars=new mySubcategory();
	$musclecars->setMySubcategory("cars", "Cars", "musclecars", "Muscle Cars");
	$musclecars->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$musclecars->printsubcategoryHTML($_GET['choice']);
	else
		$musclecars->printsubcategoryHTML("none");
		
	$musclecars->printAfterMainCategory();

?>
</html>