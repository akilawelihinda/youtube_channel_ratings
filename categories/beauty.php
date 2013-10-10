<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../main.css">
<?php
		
	require 'myCategory.php';
	$fitnessCategory=new myCategory;
	$fitnessCategory->setMyCategory("Beauty", "Beauty", array("Guys", "Girls"));
	$fitnessCategory->printCategoryHTML();
?>
</html>