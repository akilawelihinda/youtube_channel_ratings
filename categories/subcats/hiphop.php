<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$hiphop=new mySubcategory();
	$hiphop->setMySubcategory("music", "Music", "hiphop", "Hip Hop");
	$hiphop->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$hiphop->printsubcategoryHTML($_GET['choice']);
	else
		$hiphop->printsubcategoryHTML("none");
		
	$hiphop->printAfterMainCategory();

?>
</html>