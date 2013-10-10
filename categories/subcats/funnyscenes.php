<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$funnyscenes=new mySubcategory();
	$funnyscenes->setMySubcategory("movies", "Movies", "funnyscenes", "Funny Scenes");
	$funnyscenes->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$funnyscenes->printsubcategoryHTML($_GET['choice']);
	else
		$funnyscenes->printsubcategoryHTML("none");
		
	$funnyscenes->printAfterMainCategory();

?>
</html>