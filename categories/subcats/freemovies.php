<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$freemovies=new mySubcategory();
	$freemovies->setMySubcategory("movies", "Movies", "freemovies", "Free Movies");
	$freemovies->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$freemovies->printsubcategoryHTML($_GET['choice']);
	else
		$freemovies->printsubcategoryHTML("none");
		
	$freemovies->printAfterMainCategory();

?>
</html>