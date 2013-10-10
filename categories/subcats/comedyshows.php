<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$comedyshows=new mySubcategory();
	$comedyshows->setMySubcategory("tvshows", "TV Shows", "comedyshows", "Comedy Shows");
	$comedyshows->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$comedyshows->printsubcategoryHTML($_GET['choice']);
	else
		$comedyshows->printsubcategoryHTML("none");
		
	$comedyshows->printAfterMainCategory();

?>
</html>