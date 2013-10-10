<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$gamereviews=new mySubcategory();
	$gamereviews->setMySubcategory("gaming", "Gaming", "gamereviews", "Game Reviews");
	$gamereviews->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$gamereviews->printsubcategoryHTML($_GET['choice']);
	else
		$gamereviews->printsubcategoryHTML("none");
		
	$gamereviews->printAfterMainCategory();

?>
</html>