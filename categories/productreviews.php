<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../main.css">
<?php
		
	require 'myCategory.php';
	$fitnessCategory=new myCategory;
	$fitnessCategory->setMyCategory('productreviews', 'Product Reviews', array("Computers", "Laptops", "Computer Parts", "Phones", "Tablets", "Calculators", "Watches"));
	$fitnessCategory->printCategoryHTML();
?>
</html>