<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../main.css">
<?php
		
	require 'myCategory.php';
	$fitnessCategory=new myCategory;
	$fitnessCategory->setMyCategory("Anime", "Anime", array("Discussions", "One Piece", "Bleach", "Naruto", "Dragon Ball"));
	$fitnessCategory->printCategoryHTML();
?>
</html>