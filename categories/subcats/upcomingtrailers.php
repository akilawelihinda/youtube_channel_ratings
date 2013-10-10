<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$upcomingtrailers=new mySubcategory();
	$upcomingtrailers->setMySubcategory("movies", "Movies", "upcomingtrailers", "Upcoming Trailers");
	$upcomingtrailers->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$upcomingtrailers->printsubcategoryHTML($_GET['choice']);
	else
		$upcomingtrailers->printsubcategoryHTML("none");
		
	$upcomingtrailers->printAfterMainCategory();

?>
</html>