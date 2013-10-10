<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$football=new mySubcategory();
	$football->setMySubcategory("sports", "Sports", "football", "Football");
	$football->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$football->printsubcategoryHTML($_GET['choice']);
	else
		$football->printsubcategoryHTML("none");
		
	$football->printAfterMainCategory();

?>
</html>