<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$guys=new mySubcategory();
	$guys->setMySubcategory("beauty", "Beauty", "guys", "Guys");
	$guys->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$guys->printsubcategoryHTML($_GET['choice']);
	else
		$guys->printsubcategoryHTML("none");
		
	$guys->printAfterMainCategory();

?>
</html>