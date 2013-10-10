<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$baseball=new mySubcategory();
	$baseball->setMySubcategory("sports", "Sports", "baseball", "Baseball");
	$baseball->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$baseball->printsubcategoryHTML($_GET['choice']);
	else
		$baseball->printsubcategoryHTML("none");
		
	$baseball->printAfterMainCategory();

?>
</html>