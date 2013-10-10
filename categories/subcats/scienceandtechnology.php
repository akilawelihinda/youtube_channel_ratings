<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$scienceandtechnology=new mySubcategory();
	$scienceandtechnology->setMySubcategory("tvshows", "TV Shows", "scienceandtechnology", "Science & Technology");
	$scienceandtechnology->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$scienceandtechnology->printsubcategoryHTML($_GET['choice']);
	else
		$scienceandtechnology->printsubcategoryHTML("none");
		
	$scienceandtechnology->printAfterMainCategory();

?>
</html>