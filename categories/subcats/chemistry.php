<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$chemistry=new mySubcategory();
	$chemistry->setMySubcategory("education", "Education", "chemistry", "Chemistry");
	$chemistry->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$chemistry->printsubcategoryHTML($_GET['choice']);
	else
		$chemistry->printsubcategoryHTML("none");
		
	$chemistry->printAfterMainCategory();

?>
</html>