<!doctype html>
<html lang="en">
<link rel="stylesheet" href="../../main.css">
<?php
require 'mySubcategory.php';
$leagueoflegends=new mySubcategory();
	$leagueoflegends->setMySubcategory("gaming", "Gaming", "leagueoflegends", "League of Legends");
	$leagueoflegends->printBeforeMainCategory();
	if(array_key_exists('choice', $_GET))
		$leagueoflegends->printsubcategoryHTML($_GET['choice']);
	else
		$leagueoflegends->printsubcategoryHTML("none");
		
	$leagueoflegends->printAfterMainCategory();

?>
</html>