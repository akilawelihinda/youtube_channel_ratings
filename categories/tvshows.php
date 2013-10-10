<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../main.css">
<?php
		
	require 'myCategory.php';
	$fitnessCategory=new myCategory;
	$fitnessCategory->setMyCategory('tvshows', 'TV Shows', array("Reality TV", "Animated Shows", "Game Shows", "Comedy Shows", "Documentaries", "Sports", "Food", "News", "Science & Technology"));
	$fitnessCategory->printCategoryHTML();
?>
</html>