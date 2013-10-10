<!doctype html>
<html lang="en">

<?php
require 'headFile.php';
$title="About YoutubeChannelRatings.com";
$description="How YoutubeChannelRatings.com was created and who it was created by.";
printHeadFile();
?>

<link rel="stylesheet" href="main.css">
<meta charset="utf-8" />
<body>
<div id="big_wrapper">
	<div id="top_div">
	<?php
	$pageName="About";
	require 'headerFile.php';
	printHeader();
	?>
	</div>
	
	<div id="main_div">
		<section id="main_section">
		<article>
		<h1>About Youtube Channel Ratings</h1>
		I have created Youtube Channel Ratings in order to help people who know what kinds of videos they want to watch, but simply cannot find videos that suit their interests. At Youtube Channel Ratings, you can browse over 100 different categories of videos and check out recommended channels and channel ratings for each category. I am currently in the process of uploading the full site and adding all the content. I would highly appreciate if people could help me add to this site by submitting videos that they find interesting! You can do this by clicking on the 'Submit Video' tab. Expect this site to be fully functional by mid-September. If you have any suggestions, 
		please email me at <b>akila@youtubechannelratings.com</b>. 
		</article>
		
		<article>
		<h1>About the Author</h1>
		My name is Akila Welihinda, and I am an 18 year old college student attending UCLA this fall. If you want to contact me for any reason, my email is <b>akila@youtubechannelratings.com</b>. I am open to any suggestions, comments, etc.
		</article>
		</section>
	</div>
	
	<div id="side_div">
	<aside id="side_news">
	<h4>Most Popular Categories</h4>
	<ul>
	<?php
	require 'connectToDatabase.php';
		if(!$mostPopularCategories=$db->query("SELECT categoryLink, categoryDisplay FROM categorytrack ORDER BY Number DESC LIMIT 4"))
			die('There was an error connecting: queryHome1 [' . $db->error . ']');
	while($row=$mostPopularCategories->fetch_assoc())
		print <<<HTMLBLOCK
		<li> <a class="categoryLinks" href="website/{$row['categoryLink']}.php"> {$row['categoryDisplay']} </a> </li>
HTMLBLOCK;
	?>
	</ul>
	</aside>
	</div>
	
	<div id="footer_div">
	<?php
		require 'footerFile.txt';
	?>
	</div>
	
</div>
</body>
</html>
