<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$dragonball=new mySubcategory();
	$dragonball->setMySubcategory("anime", "Anime", "dragonball", "Dragon Ball");
	$dragonball->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$dragonball->printsubcategoryHTML($_GET['choice']);
	else
		$dragonball->printsubcategoryHTML("none");
		
	$dragonball->printAfterMainCategory();

?>
</html>