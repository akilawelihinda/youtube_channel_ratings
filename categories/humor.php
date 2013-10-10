<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../main.css">
<?php
		
	require 'myCategory.php';
	$humorCategory=new myCategory;
	$humorCategory->setMyCategory("Humor", "Humor", array("Racial", "Crazy", "Parody", "Comedians", "Vines", "Other"));
	$humorCategory->printCategoryHTML();
?>
</html>