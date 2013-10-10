<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$worldhistory=new mySubcategory();
	$worldhistory->setMySubcategory("history", "History", "worldhistory", "World History");
	$worldhistory->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$worldhistory->printsubcategoryHTML($_GET['choice']);
	else
		$worldhistory->printsubcategoryHTML("none");
		
	$worldhistory->printAfterMainCategory();

?>
</html>