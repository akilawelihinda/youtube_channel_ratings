<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$cats=new mySubcategory();
	$cats->setMySubcategory("petsanimals", "Pets/Animals", "cats", "Cats");
	$cats->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$cats->printsubcategoryHTML($_GET['choice']);
	else
		$cats->printsubcategoryHTML("none");
		
	$cats->printAfterMainCategory();

?>
</html>