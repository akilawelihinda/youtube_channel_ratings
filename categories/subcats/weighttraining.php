<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$weighttraining=new mySubcategory();
	$weighttraining->setMySubcategory("fitness", "Fitness", "weighttraining", "Weight Training");
	$weighttraining->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$weighttraining->printsubcategoryHTML($_GET['choice']);
	else
		$weighttraining->printsubcategoryHTML("none");
		
	$weighttraining->printAfterMainCategory();

?>
</html>