<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$models=new mySubcategory();
	$models->setMySubcategory("people", "People", "models", "Models");
	$models->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$models->printsubcategoryHTML($_GET['choice']);
	else
		$models->printsubcategoryHTML("none");
		
	$models->printAfterMainCategory();

?>
</html>