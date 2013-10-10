<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../main.css">
<?php
		
	require 'myCategory.php';
	$fitnessCategory=new myCategory;
	$fitnessCategory->setMyCategory("Fitness", "Fitness", array("Weight Training", "Weight Loss", "Cardio", "Motivation", "Supplements", "Body Builders"));
	$fitnessCategory->printCategoryHTML();
?>
</html>