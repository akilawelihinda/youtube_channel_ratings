<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$europeanhistory=new mySubcategory();
	$europeanhistory->setMySubcategory("history", "History", "europeanhistory", "European History");
	$europeanhistory->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$europeanhistory->printsubcategoryHTML($_GET['choice']);
	else
		$europeanhistory->printsubcategoryHTML("none");
		
	$europeanhistory->printAfterMainCategory();

?>
</html>