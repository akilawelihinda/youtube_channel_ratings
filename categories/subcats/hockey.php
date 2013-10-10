<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$hockey=new mySubcategory();
	$hockey->setMySubcategory("sports", "Sports", "hockey", "Hockey");
	$hockey->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$hockey->printsubcategoryHTML($_GET['choice']);
	else
		$hockey->printsubcategoryHTML("none");
		
	$hockey->printAfterMainCategory();

?>
</html>