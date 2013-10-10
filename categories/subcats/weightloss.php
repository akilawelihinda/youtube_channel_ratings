<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$weightloss=new mySubcategory();
	$weightloss->setMySubcategory("fitness", "Fitness", "weightloss", "Weight Loss");
	$weightloss->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$weightloss->printsubcategoryHTML($_GET['choice']);
	else
		$weightloss->printsubcategoryHTML("none");
		
	$weightloss->printAfterMainCategory();

?>
</html>