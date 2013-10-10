<?php
$indexPath='../';
$otherPath='';
$imagePath='images';

function printHeader(){
print<<<HTMLBLOCK
<header id="top_header"> 
		<div align="center">
		<a><img src="{$GLOBALS['imagePath']}/officialLogo.jpg" /></a>
		</div>
		<h1 style="color:#FFFFFF">
		{$GLOBALS['pageName']}
		</h1>
	
	
	<nav id="top_menu">
	<ul>
		<li> <a class="topLinks" href="{$GLOBALS['indexPath']}index.php">Home</a></li>
		<li> <a class="topLinks" href="{$GLOBALS['otherPath']}categories.php">Categories</a></li>
		<li> <a class="topLinks" href="{$GLOBALS['otherPath']}about.php">About</a></li>
		<li> <a class="topLinks" href="{$GLOBALS['otherPath']}donate.php">Donate</a></li>
		<li> <a class="topLinks" href="{$GLOBALS['otherPath']}submitvideo.php">Submit Video</a></li>
	</ul>
	</nav>
</header>
HTMLBLOCK;

}

function setHeaderVariables($indexPath, $otherPath, $imagePath){
$GLOBALS['indexPath']=$indexPath;
$GLOBALS['otherPath']=$otherPath;
$GLOBALS['imagePath']=$imagePath;

}

function setPageName($pageName){
$GLOBALS['pageName']=$pageName;
}

?>