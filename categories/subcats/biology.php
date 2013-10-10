<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$biology=new mySubcategory();
	$biology->setMySubcategory("education", "Education", "biology", "Biology");
	$biology->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$biology->printsubcategoryHTML($_GET['choice']);
	else
		$biology->printsubcategoryHTML("none");
		
	$biology->printAfterMainCategory();

?>
</html>