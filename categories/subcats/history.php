<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$history=new mySubcategory();
	$history->setMySubcategory("education", "Education", "history", "History");
	$history->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$history->printsubcategoryHTML($_GET['choice']);
	else
		$history->printsubcategoryHTML("none");
		
	$history->printAfterMainCategory();

?>
</html>