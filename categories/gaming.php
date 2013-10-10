<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../main.css">
<?php
		
	require 'myCategory.php';
	$fitnessCategory=new myCategory;
	$fitnessCategory->setMyCategory("Gaming", "Gaming", array("Minecraft", "League of Legends", "Call of Duty", "Battlefield", "Game Reviews", 
												"Game Tutorials", "Game Cheats"));
	$fitnessCategory->printCategoryHTML();
?>
</html>