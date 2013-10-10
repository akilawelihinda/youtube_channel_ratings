<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$calculators=new mySubcategory();
	$calculators->setMySubcategory("productreviews", "Product Reviews", "calculators", "Calculators");
	$calculators->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$calculators->printsubcategoryHTML($_GET['choice']);
	else
		$calculators->printsubcategoryHTML("none");
		
	$calculators->printAfterMainCategory();

?>
</html>