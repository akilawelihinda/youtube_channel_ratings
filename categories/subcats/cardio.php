<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$cardio=new mySubcategory();
	$cardio->setMySubcategory("fitness", "Fitness", "cardio", "Cardio");
	$cardio->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$cardio->printsubcategoryHTML($_GET['choice']);
	else
		$cardio->printsubcategoryHTML("none");
		
	$cardio->printAfterMainCategory();

?>
</html>