<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../main.css">
<?php
		
	require 'myCategory.php';
	$fitnessCategory=new myCategory;
	$fitnessCategory->setMyCategory("Movies", "Movies", array("Upcoming Trailers", "Reviews", "Funny Scenes", "Free Movies", "Documentaries"));
	$fitnessCategory->printCategoryHTML();
?>
</html>