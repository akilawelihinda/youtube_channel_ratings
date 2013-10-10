<!doctype html>
<html lang="en">

<?php
$type="image/icon";
$href="website/images/officialLogo.jpg";

print <<<HTMLBLOCK
<head>
	<meta charset="utf-8" />
	<title>Youtube Channel Ratings and Reviews. Browse videos, reviews, and ratings from over 100 different categories!</title>
	<META NAME=”description” CONTENT=”Read Youtube channel reviews, view ratings, and watch Youtube videos from over 100 different categories! Don't know what to watch on Youtube? Don't worry, we got you covered!”>
	
	<link rel="stylesheet" href="website/main.css">
	<link rel="icon" type="$type" href="$href" >
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="website/raty/lib/jquery.raty.min.js"></script>
		
		<script>
		$(document).ready(function(){
			$('.star').raty({ 
			readOnly: true,
			score: function() {
				return $(this).attr("data-score");
			  },
			 starOff: 'website/raty/lib/img/star-off.png',
			starOn : 'website/raty/lib/img/star-on.png',
			starHalf: 'website/raty/lib/img/star-half.png'
			});

		});
		</script>
		
		<script type='text/javascript'>
		$(document).ready(function() {
		  $("a.youtube-lazy-link").each(function(index) {
			var embedparms = $(this).attr("href").split("/embed/")[1];
			if(!embedparms) embedparms = $(this).attr("href").split("://youtu.be/")[1];
			if(!embedparms) embedparms = $(this).attr("href").split("?v=")[1].replace(/\&/,'?');
			var youid = embedparms.split("?")[0].split("#")[0];
			var start = embedparms.match(/[#&]t=(\d+)s/);
			if(start) start = start[1];
			else {
			  start = embedparms.match(/[#&]t=(\d+)m(\d+)s/);
			  if(start) start = parseInt(start[1])*60+parseInt(start[2]);
			  else {
				start = embedparms.match(/[?&]start=(\d+)/);
				if(start) start = start[1];
			  }
			}
			embedparms = embedparms.split("#")[0];
			if(start && embedparms.indexOf("start=") == -1)
			  embedparms += ((embedparms.indexOf("?")==-1) ? "?" : "&") + "start="+start;
			if(embedparms.indexOf("showinfo=0") != -1)
			  $(this).html('');
			else
			  $(this).html('<div class="youtube-lazy-link-info">' + $(this).html() + '</div>');
			$(this).prepend('<div style="height:'+(parseInt($(this).css("height"))-4)+'px;width:'+(parseInt($(this).css("width"))-4)+'px;" class="youtube-lazy-link-div"></div>');
			$(this).css("background", "#000 url(http://i2.ytimg.com/vi/"+youid+"/0.jpg) center center no-repeat");
			$(this).attr("id", youid+index);
			$(this).attr("href", "http://www.youtube.com/watch?v="+youid+(start ? "#t="+start+"s" : ""));
			var emu = 'http://www.youtube.com/embed/'+embedparms;
			emu += ((emu.indexOf("?")==-1) ? "?" : "&") + "autoplay=1";
			var videoFrame = '<iframe width="'+parseInt($(this).css("width"))+'" height="'+parseInt($(this).css("height"))+'" style="vertical-align:top;" src="'+emu+'" frameborder="0" allowfullscreen></iframe>';
			$(this).attr("onclick", "$('#"+youid+index+"').replaceWith('"+videoFrame+"');return false;");
		  });
		})
		//]]>
		</script>
		<style type='text/css'>
		a.youtube-lazy-link {
		  vertical-align:top;
		  background:#555;
		  width:560px; height:315px;
		  background-size:cover;
		  text-decoration:none;
		  color:#DDD;
		  text-align:left;
		  text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
		  display:inline-block;
		}
		a.youtube-lazy-link:hover {
		  text-decoration:none;
		  color:#FFF;
		}
		.youtube-lazy-link-div {
		  border:2px solid #000;
		  background: url(http://lh4.googleusercontent.com/-QCeB6REIFlE/TuGUlY3N46I/AAAAAAAAAaI/9-urEUtpKcI/s800/youtube-play-button.png) center center no-repeat;
		  position:absolute;
		}
		.youtube-lazy-link-div:hover {
		  background: url(http://lh5.googleusercontent.com/-oBFjswrosz4/TuHqainRc3I/AAAAAAAAAbE/t3rMQuSJdLA/s800/youtube-play-button-hover.png) center center no-repeat;
		}
		.youtube-lazy-link-info {
		  font-size: 110%;
		  padding: 2px 6px;
		  background: rgb(0, 0, 0);
		  background: rgba(0, 0, 0, 0.5);
		}
		</style>
</head> 
HTMLBLOCK;
?>
<link rel="sytlesheet" href="website/main.css">
<body>
		<?php
		require 'website/connectToDatabase.php';
		if(!$db->query("UPDATE visittrack SET website_visIts=website_visIts+1"))
            die('There was an error connecting: Database unable to connect [' . $db->error . ']');
		?>
<div id="big_wrapper">

	<div id="top_div">
	<header id="top_header"> 
		<div align="center">
		<a><img src="website/images/officialLogo.jpg" /></a>
		</div>
		<h1 style="color:#FFFFFF">
		<?php
		$pageName="Home";
		print "$pageName";
		?>
		</h1>
	
	
	<nav id="top_menu">
	<ul>
		<li> <a class="topLinks" href="index.php">Home</a></li>
		<li> <a class="topLinks" href="website/categories.php">Categories</a></li>
		<li> <a class="topLinks" href="website/about.php">About</a></li>
		<li> <a class="topLinks" href="website/donate.php">Donate</a></li>
		<li> <a class="topLinks" href="website/submitvideo.php">Submit Video</a></li>
	</ul>
	</nav>
	</header>
	</div>
	
	<div id="main_div">
	<section id="main_section">
	<h1>Recently Added:</h1><br>
		<article>
			<header>
			<hgroup>
			<h1>Welcome to YoutubeChannelRatings.com!</h1>
			</hgroup>
			<p>
			Welcome to YouTubeChannelRatings, which I have created so that anyone can find videos from specific categories that interest them. Each category has many Youtube channels that have a rating,
			a description, and other information regarding similar videos. I hope this website helps you make YouTube more interesting and fun to use! I'll try my best to get a forum up soon so you guys can post recommendations for each other! Email me at <b>akila@youtubechannelratings.com</b> if you have any 
			suggestions or comments!
			</p>
			<footer>-Akila</footer>
		</article>
		
		<?php
			require 'website/connectToDatabase.php';
				if(!$recentlyAdded=$db->query("SELECT articlehtml, category FROM myarticle ORDER BY timeSubmitted DESC LIMIT 10"))
					die('There was an error connecting: queryHome0 [' . $db->error . ']');

				while($oneArticle=$recentlyAdded->fetch_assoc())
				{
				$printHTML=$oneArticle['articlehtml'];
				$category=$oneArticle['category'];
				$queryString="SELECT categoryDisplay, categoryLink FROM categorytrack WHERE category='$category'";
				if(!$categoryObject=$db->query("$queryString"))
					die('There was an error connecting: queryHome0 [' . $db->error . ']');
				$q=$categoryObject->fetch_assoc();
				$category=$q['categoryDisplay'];
				$categoryLink=$q['categoryLink'];
				$printHTML=str_replace('</h1>', " - <a class=\"categoryLinks\" href=\"website/$categoryLink.php\">$category</a></h1>", $printHTML);
				print "{$printHTML}";
				}
			//end main_div
		?>
		
	<aside id="facebook_aside">
		Hey everyone! Make sure to like on us Facebook to hear about new ratings, channels, and categories! Please feel free to send messages, suggestions, etc.<br>
		<img width:"15" height:"15" src="website/images/facebook.png"  />
	</aside>	
	</section>
	</div>
	
	<div id="side_div">
	<aside id="side_news">
	<h4>Most Popular Categories</h4>
	<ul>
	<?php
	require 'website/connectToDatabase.php';
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
		require 'website/footerFile.txt';
		?>
	</div>
	
</div>
</body>
</html>