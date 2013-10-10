<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$badminton=new mySubcategory();
	$badminton->setMySubcategory("sports", "Sports", "badminton", "Badminton");
	$badminton->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$badminton->printsubcategoryHTML($_GET['choice']);
	else
		$badminton->printsubcategoryHTML("none");
		
	$badminton->printAfterMainCategory();

?>
</html>