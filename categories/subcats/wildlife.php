<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$wildlife=new mySubcategory();
	$wildlife->setMySubcategory("petsanimals", "Pets/Animals", "wildlife", "Wildlife");
	$wildlife->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$wildlife->printsubcategoryHTML($_GET['choice']);
	else
		$wildlife->printsubcategoryHTML("none");
		
	$wildlife->printAfterMainCategory();

?>
</html>