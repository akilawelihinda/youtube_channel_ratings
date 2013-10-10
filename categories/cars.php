<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../main.css">
<?php
		
	require 'myCategory.php';
	$fitnessCategory=new myCategory;
	$fitnessCategory->setMyCategory("Cars", "Cars", array( "Sports Cars", "Muscle Cars", "Races"));
	$fitnessCategory->printCategoryHTML();
?>
</html>