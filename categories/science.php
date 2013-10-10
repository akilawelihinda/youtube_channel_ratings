<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../main.css">
<?php
		
	require 'myCategory.php';
	$fitnessCategory=new myCategory;
	$fitnessCategory->setMyCategory("Science", "Science", array("Physics", "Biology", "Chemistry", "Fun Experiments", "Theories"));
	$fitnessCategory->printCategoryHTML();
?>
</html>