<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$callofduty=new mySubcategory();
	$callofduty->setMySubcategory("gaming", "Gaming", "callofduty", "Call of Duty");
	$callofduty->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$callofduty->printsubcategoryHTML($_GET['choice']);
	else
		$callofduty->printsubcategoryHTML("none");
		
	$callofduty->printAfterMainCategory();

?>
</html>