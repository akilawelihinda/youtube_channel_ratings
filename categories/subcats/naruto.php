<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$naruto=new mySubcategory();
	$naruto->setMySubcategory("anime", "Anime", "naruto", "Naruto");
	$naruto->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$naruto->printsubcategoryHTML($_GET['choice']);
	else
		$naruto->printsubcategoryHTML("none");
		
	$naruto->printAfterMainCategory();

?>
</html>