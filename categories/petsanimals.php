<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../main.css">
<?php
		
	require 'myCategory.php';
	$fitnessCategory=new myCategory;
	$fitnessCategory->setMyCategory('petsanimals', 'Pets/Animals', array("Wildlife", "Dogs", "Cats"));
	$fitnessCategory->printCategoryHTML();
?>
</html>