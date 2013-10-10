<!doctype html>
<html lang="en">

<?php
require 'headFile.php';
$title="Donate to YoutubeChannelRatings.com!";
$description="Please donate to YoutubeChannelRatings.com if you find our services useful! All donations are welcome!";
printHeadFile();
?>

<link rel="stylesheet" href="main.css">
<meta charset="utf-8" />
<body>
<div id="big_wrapper">
	
	<div id="top_div">
	<?php
		$pageName="Donate";
		require 'headerFile.php';
		printHeader();
	?>
	</div>
	
	<div id="main_div">
		<section id="main_section">
			All donations are appreciated as it took a lot of effort to create this website! The money that you donate will be spent to hire more people to keep adding content for you guys to enjoy!
				<center>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
				<input type="hidden" name="cmd" value="_s-xclick">
				<input type="hidden" name="hosted_button_id" value="LNLE5VC6J9XHE">
				<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
				<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
				</form>

				</center>
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
