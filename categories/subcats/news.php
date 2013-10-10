<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$news=new mySubcategory();
	$news->setMySubcategory("tvshows", "TV Shows", "news", "News");
	$news->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$news->printsubcategoryHTML($_GET['choice']);
	else
		$news->printsubcategoryHTML("none");
		
	$news->printAfterMainCategory();

?>
</html>