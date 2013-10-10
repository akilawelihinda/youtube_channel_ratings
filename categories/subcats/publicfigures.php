<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$publicfigures=new mySubcategory();
	$publicfigures->setMySubcategory("people", "People", "publicfigures", "Public Figures");
	$publicfigures->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$publicfigures->printsubcategoryHTML($_GET['choice']);
	else
		$publicfigures->printsubcategoryHTML("none");
		
	$publicfigures->printAfterMainCategory();

?>
</html>