<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../main.css">
<?php
		
	require 'myCategory.php';
	$fitnessCategory=new myCategory;
	$fitnessCategory->setMyCategory("Education", "Education", array("Math", "Chemistry", "Physics", "History", "Computer Science", 
						"Biology", "English", "Economics"));
	$fitnessCategory->printCategoryHTML();
?>
</html>