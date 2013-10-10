<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../main.css">
<?php
		
	require 'myCategory.php';
	$fitnessCategory=new myCategory;
	$fitnessCategory->setMyCategory("Music", "Music", array( "Hip Hop", "Rock", "Country", "Classical", "Jazz"));
	$fitnessCategory->printCategoryHTML();
?>
</html>