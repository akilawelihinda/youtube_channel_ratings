<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$economy=new mySubcategory();
	$economy->setMySubcategory("newsblog", "News/Blog", "economy", "Economy");
	$economy->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$economy->printsubcategoryHTML($_GET['choice']);
	else
		$economy->printsubcategoryHTML("none");
		
	$economy->printAfterMainCategory();

?>
</html>