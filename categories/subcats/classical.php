<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$classical=new mySubcategory();
	$classical->setMySubcategory("music", "Music", "classical", "Classical");
	$classical->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$classical->printsubcategoryHTML($_GET['choice']);
	else
		$classical->printsubcategoryHTML("none");
		
	$classical->printAfterMainCategory();

?>
</html>