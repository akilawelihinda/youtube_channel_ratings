<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$americanhistory=new mySubcategory();
	$americanhistory->setMySubcategory("history", "History", "americanhistory", "American History");
	$americanhistory->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$americanhistory->printsubcategoryHTML($_GET['choice']);
	else
		$americanhistory->printsubcategoryHTML("none");
		
	$americanhistory->printAfterMainCategory();

?>
</html>