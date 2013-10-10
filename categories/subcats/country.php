<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$country=new mySubcategory();
	$country->setMySubcategory("music", "Music", "country", "Country");
	$country->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$country->printsubcategoryHTML($_GET['choice']);
	else
		$country->printsubcategoryHTML("none");
		
	$country->printAfterMainCategory();

?>
</html>