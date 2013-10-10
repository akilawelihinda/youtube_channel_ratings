<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$discussions=new mySubcategory();
	$discussions->setMySubcategory("anime", "Anime", "discussions", "Discussions");
	$discussions->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$discussions->printsubcategoryHTML($_GET['choice']);
	else
		$discussions->printsubcategoryHTML("none");
		
	$discussions->printAfterMainCategory();

?>
</html>