<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$dogs=new mySubcategory();
	$dogs->setMySubcategory("petsanimals", "Pets/Animals", "dogs", "Dogs");
	$dogs->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$dogs->printsubcategoryHTML($_GET['choice']);
	else
		$dogs->printsubcategoryHTML("none");
		
	$dogs->printAfterMainCategory();

?>
</html>