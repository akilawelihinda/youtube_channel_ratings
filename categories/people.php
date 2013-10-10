<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../main.css">
<?php
		
	require 'myCategory.php';
	$fitnessCategory=new myCategory;
	$fitnessCategory->setMyCategory("People", "People", array("Models", "Celebreties", "Public Figures"));
	$fitnessCategory->printCategoryHTML();
?>
</html>