<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$gamecheats=new mySubcategory();
	$gamecheats->setMySubcategory("gaming", "Gaming", "gamecheats", "Game Cheats");
	$gamecheats->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$gamecheats->printsubcategoryHTML($_GET['choice']);
	else
		$gamecheats->printsubcategoryHTML("none");
		
	$gamecheats->printAfterMainCategory();

?>
</html>