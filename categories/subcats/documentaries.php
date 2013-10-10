<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$documentaries=new mySubcategory();
	$documentaries->setMySubcategory("movies", "Movies", "documentaries", "Documentaries");
	$documentaries->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$documentaries->printsubcategoryHTML($_GET['choice']);
	else
		$documentaries->printsubcategoryHTML("none");
		
	$documentaries->printAfterMainCategory();

?>
</html>