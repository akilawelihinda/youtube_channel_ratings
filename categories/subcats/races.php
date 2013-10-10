<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$races=new mySubcategory();
	$races->setMySubcategory("cars", "Cars", "races", "Races");
	$races->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$races->printsubcategoryHTML($_GET['choice']);
	else
		$races->printsubcategoryHTML("none");
		
	$races->printAfterMainCategory();

?>
</html>