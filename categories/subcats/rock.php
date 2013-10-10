<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$rock=new mySubcategory();
	$rock->setMySubcategory("music", "Music", "rock", "Rock");
	$rock->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$rock->printsubcategoryHTML($_GET['choice']);
	else
		$rock->printsubcategoryHTML("none");
		
	$rock->printAfterMainCategory();

?>
</html>