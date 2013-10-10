<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$funexperiments=new mySubcategory();
	$funexperiments->setMySubcategory("science", "Science", "funexperiments", "Fun Experiments");
	$funexperiments->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$funexperiments->printsubcategoryHTML($_GET['choice']);
	else
		$funexperiments->printsubcategoryHTML("none");
		
	$funexperiments->printAfterMainCategory();

?>
</html>