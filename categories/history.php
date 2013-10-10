<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../main.css">
<?php
		
	require 'myCategory.php';
	$fitnessCategory=new myCategory;
	$fitnessCategory->setMyCategory("History", "History", array("American History", "World History", "European History"));
	$fitnessCategory->printCategoryHTML();
?>
</html>