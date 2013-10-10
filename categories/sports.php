<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../main.css">
<?php
		
	require 'myCategory.php';
	$fitnessCategory=new myCategory;
	$fitnessCategory->setMyCategory("Sports", "Sports", array("Basketball", "Football", "Baseball", "Soccer", "Hockey", "Tennis", "Swimming", "Boxing", "Track", "Cricket",
												"Volleyball", "Golf", "Wrestling", "Badminton"));
	$fitnessCategory->printCategoryHTML();
?>
</html>