<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$bleach=new mySubcategory();
	$bleach->setMySubcategory("anime", "Anime", "bleach", "Bleach");
	$bleach->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$bleach->printsubcategoryHTML($_GET['choice']);
	else
		$bleach->printsubcategoryHTML("none");
		
	$bleach->printAfterMainCategory();

?>
</html>