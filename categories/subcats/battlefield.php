<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$battlefield=new mySubcategory();
	$battlefield->setMySubcategory("gaming", "Gaming", "battlefield", "Battlefield");
	$battlefield->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$battlefield->printsubcategoryHTML($_GET['choice']);
	else
		$battlefield->printsubcategoryHTML("none");
		
	$battlefield->printAfterMainCategory();

?>
</html>