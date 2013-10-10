<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$track=new mySubcategory();
	$track->setMySubcategory("sports", "Sports", "track", "Track");
	$track->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$track->printsubcategoryHTML($_GET['choice']);
	else
		$track->printsubcategoryHTML("none");
		
	$track->printAfterMainCategory();

?>
</html>