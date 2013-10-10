<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../main.css">
<?php
		
	require 'myCategory.php';
	$fitnessCategory=new myCategory;
	$fitnessCategory->setMyCategory('newsblog', 'News/Blog', array("White House", "Economy"));
	$fitnessCategory->printCategoryHTML();
?>
</html>