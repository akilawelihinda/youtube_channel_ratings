<?php
$type="image/icon";
$href="images/officialLogo.jpg";

function printHeadFile(){
print <<<HTMLBLOCK
<head>
	<meta charset="utf-8" />
	<title>{$GLOBALS['title']}</title>
	<META NAME=”description” CONTENT=”{$GLOBALS['description']}”>
	<link rel="stylesheet" href="main.css">
	<link rel="icon" type="{$GLOBALS['type']}" href="{$GLOBALS['href']}" >

</head> 
HTMLBLOCK;
}

function setHeadFile($type, $href, $title, $description){
$GLOBALS['type']=$type;
$GLOBALS['href']=$href;
$GLOBALS['title']=$title;
$GLOBALS['description']=$description;
}

?>