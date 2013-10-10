<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$reviews=new mySubcategory();
	$reviews->setMySubcategory("movies", "Movies", "reviews", "Reviews");
	$reviews->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$reviews->printsubcategoryHTML($_GET['choice']);
	else
		$reviews->printsubcategoryHTML("none");
		
	$reviews->printAfterMainCategory();

?>
</html>