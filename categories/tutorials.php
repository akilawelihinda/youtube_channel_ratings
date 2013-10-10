<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../main.css">
<?php
		
	require 'myCategory.php';
	$fitnessCategory=new myCategory;
	$fitnessCategory->setMyCategory("Tutorials", "Tutorials", array("Computer Tutorials", "Electronics Tutorials", "General Tutorials"));
	$fitnessCategory->printCategoryHTML();
?>
</html>