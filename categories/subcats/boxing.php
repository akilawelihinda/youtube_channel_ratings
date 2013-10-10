<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$boxing=new mySubcategory();
	$boxing->setMySubcategory("sports", "Sports", "boxing", "Boxing");
	$boxing->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$boxing->printsubcategoryHTML($_GET['choice']);
	else
		$boxing->printsubcategoryHTML("none");
		
	$boxing->printAfterMainCategory();

?>
</html>f