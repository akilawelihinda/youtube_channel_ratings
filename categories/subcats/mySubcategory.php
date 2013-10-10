<?php
	//needs to access publisherinfo to get channel rating, home page link NEEDS TO CHECK ALL SUBCATS IN PUBLISHERINFO BECAUSE SOME PUBLISHERS HAVE MORE THAN ONE SUBCAT
	//needs to access subcategorytrack to note most popular subcategories
	
		/*SIDEBAR
		-recently added
		-view rated channels
		-most popular
		-highest rating
		-view all
		*/
		
	class mySubcategory{
	
	private $categoryName;
	private $realCategoryName;
	private $subcatName;
	private $realSubcatName;
	
		public function setMySubcategory($catName, $realCatName, $subName, $realSubName)
		{
		$this->categoryName=$catName;
		$this->realCategoryName=$realCatName;
		$this->subcatName=$subName;
		$this->realSubcatName=$realSubName;
		}
		
		public function printSubcategoryHTML($choice){
		require '../../connectToDatabase.php';
		$title=$this->subcatName;
		$realTitle=$this->realSubcatName;
		$realTitle2=$this->categoryName;
		
		switch($choice)
		{
		case 'none': //first case
		print "<h1>$realTitle: Recently Added</h1><br>";
		if(!$db->query("UPDATE subcategorytrack SET Number=Number+1 WHERE name=\"$title\""))	
			die('There was an error connecting: querymysubcat0 [' . $db->error . ']');
			
		if(!$recentlyAdded=$db->query("SELECT articlehtml FROM myarticle WHERE subcategory=\"{$this->subcatName}\" ORDER BY timeSubmitted DESC LIMIT 7"))
			die('There was an error connecting: querymysubcat1 [' . $db->error . ']');
			
		while($oneArticle=$recentlyAdded->fetch_assoc())
		{
		print "{$oneArticle['articlehtml']}";
		}
		break;
		
		case 'viewratedchannels': //second case
		print "<h1>$realTitle: View Rated Channels</h1><br>";
			if(!$featuredChannels=$db->query("SELECT username, homePageLink, rating, description FROM publisherinfo WHERE categories LIKE \"%$realTitle2%\" AND subcategories LIKE \"%$title%\""))	
				die('There was an error connecting: querymysubcat2 [' . $db->error . ']');
			
			if($featuredChannels->num_rows==0)
			{
			print "<article><p>Sorry, no channels have currently been rated. If you would like to submit a channel for a review, please email the channel name to akila@youtubechannelratings.com!</p></article>";
			}
			
			print "<div class=\"accordion\"> <ul>";
			while($eachChannel=$featuredChannels->fetch_assoc())
			{
			$rating=$eachChannel['rating'];
			print <<<HTMLBLOCK
			<div class="accord-header"> <div class="publisherAndStars"><li class="publisherTitle"> <a class="publisherLinks"> {$eachChannel['username']}</a> </li>   <div class="star" data-score="$rating"> </div> </div></div>
			<div class="accord-content"> <article> <p> <div class="publisherAndStars"> <li class="unbulletedList"> <a class="categoryLinks" href="http://www.youtube.com/{$eachChannel['username']}">View Channel</a>&nbsp;&nbsp;&nbsp;Rate:&nbsp;&nbsp;</li> <div id="{$eachChannel['username']}" class="starRate"> </div> </div> </p> <p>{$eachChannel['description']}</p> </article> </div>
HTMLBLOCK;
			}
			print "</ul></div>";
			break;
			
		case 'submitvideo': //third case
		print "<h1>$realTitle: Submit Video</h1><br>";
						if(!array_key_exists("check_submit", $_POST))
					displayForm($this->subcatName);
				else{
					processForm($this->categoryName, $this->subcatName);
				}
			break;
			
		case 'highestrating': //fourth case
		print "<h1>$realTitle: Highest Rated Videos</h1><br>";
			if(!$highestRating=$db->query("SELECT username FROM publisherinfo WHERE subcategories LIKE \"%$title%\" ORDER BY rating DESC LIMIT 7"))	
				die('There was an error connecting: querymysubcat3 [' . $db->error . ']');
			while($eachChannel=$highestRating->fetch_assoc())
			{
			$channelName=$eachChannel['username'];
			if(!$mostRecentlyAddedByHighestRated=$db->query("SELECT articlehtml FROM myarticle WHERE publisher='$channelName' ORDER BY timeSubmitted DESC LIMIT 2"))	
				die('There was an error connecting: querymysubcat3 [' . $db->error . ']');
			while($eachArticle=$mostRecentlyAddedByHighestRated->fetch_assoc())
			{
			print "{$eachArticle['articlehtml']}";
			}
			}
			break;
		
		case 'viewall': //fifth case
		print "<h1>$realTitle: View All Videos</h1><br>";
			if(!$allChannels=$db->query("SELECT articlehtml FROM myarticle WHERE subcategory='$title' ORDER BY timeSubmitted DESC"))	
				die('There was an error connecting: querymysubcat4 [' . $db->error . ']');
				
			while($oneArticle=$allChannels->fetch_assoc())
				print "{$oneArticle['articlehtml']}";
			break;
		}
		}
	
	public function printBeforeMainCategory(){
		$title="{$this->realSubcatName} Youtube channel reviews, ratings, & videos | Youtube Channel Ratings";
		$description="Browse Youtube videos, channel reviews, and ratings from the {$this->realSubcatName} category";
		require 'subcategoryHeadFile.php'; 
		print <<<HTMLBLOCK
		<body> <div id="big_wrapper"> <div id="top_div">
HTMLBLOCK;
		$pageName=<<<HTMLBLOCK
		<a href="../../categories.php" class="categoryWhiteLinks">Categories - </a><a href="../{$this->categoryName}.php" class="categoryWhiteLinks">{$this->realCategoryName} - </a><a href="{$this->subcatName}.php" class="categoryWhiteLinks">$this->realSubcatName</a>
HTMLBLOCK;
		require 'subcategoryHeaderFile.php';
		
		print <<<HTMLBLOCK
		</div> <div id="main_div"> <section id="main_section">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

		<script type="text/javascript">
		  $(document).ready(function() {
			$(".accordion .accord-header").click(function() {
			  if($(this).next("div").is(":visible")){
				$(this).next("div").slideUp("fast");
			  } else {
				$(".accordion .accord-content").slideUp("fast");
				$(this).next("div").slideToggle("fast");
			  }
			});
		  });
		</script>
		
		<script src="../../raty/lib/jquery.raty.min.js"></script>
		
		<script>
		$(document).ready(function(){
			$('.star').raty({ 
			readOnly: true,
			score: function() {
				return $(this).attr("data-score");
			  },
			 starOff: '../../raty/lib/img/star-off.png',
			starOn : '../../raty/lib/img/star-on.png',
			starHalf: '../../raty/lib/img/star-half.png'
			});

		});
		</script>
		
		<script>
		$(document).ready(function(){
			$('.starRate').raty({ 
			 starOff: '../../raty/lib/img/star-off.png',
			starOn : '../../raty/lib/img/star-on.png',
			starHalf: '../../raty/lib/img/star-half.png',
				click: function(score, evt) {
					var id = $(this).attr('id');
					$.post('saveRatings.php',{score:score, id:id },
							function(data){
								alert('You sumbitted a score of '+score+' for '+id+'!');
					});
				}
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
HTMLBLOCK;
		}
		
	public function printAfterMainCategory(){
	print <<<HTMLBLOCK
		</section></div> <div id="side_div"> <aside id="side_news"> <h4> {$this->realSubcatName} </h4> <ul>
			<li> <a class="categoryLinks" href="{$this->subcatName}.php">Recently Added</a> </li>
			<li> <a class="categoryLinks" href="{$this->subcatName}.php?choice=viewratedchannels">View Rated Channels</a> </li>
			<li> <a class="categoryLinks" href="{$this->subcatName}.php?choice=viewall">View All</a> </li>
			<li> <a class="categoryLinks" href="{$this->subcatName}.php?choice=submitvideo">Submit Video</a> </li>
		</ul> </aside> </div> <div id="footer_div">
HTMLBLOCK;
		require '../categoryFooterFile.txt';
		print '</div> </div> </body>';
	}
	
	}
	
	function displayForm($subcatName)
			{
			print <<<HTMLBLOCK
			<link rel="sytlesheet" href="main.css">
			<form name="formName" action="{$subcatName}.php?choice=submitvideo" method="post" onsubmit="return validateForm()" >
					Name:  <input type="text" name="user_name" style="width:250px"><br><br>
					Publisher:  <input type="text" name="publisher"><br><br>
					Title:  <input type="text" name="title"><br><br>
					Description:<br><textarea name="description" rows=4 cols=30></textarea><br><br>
					Link:  <input type="text" name="link" style="width: 300px;">
					<br><br>
					<input type="hidden" name="check_submit" value="1">
					<input class="submit" type="submit" name="Submit">
					
					<script>
					function validateForm(){
					var array=new Array();
					array[0]=document.forms["formName"]["user_name"].value;
					array[1]=document.forms["formName"]["publisher"].value;
					array[2]=document.forms["formName"]["title"].value;
					array[3]=document.forms["formName"]["link"].value;
						for(var x=0; x<array.length; x++)
						{
							if(array[x]=="" || array[x]==null){
							alert("All fields must be filled out");
							return false;
							}
						}
					}
					</script>
					</form>
HTMLBLOCK;
			}

			function processForm($catName, $subcatName)
			{
			$array=$_POST;
				foreach($array as $key=>$value)
				{
				$oneString[$key]=strip_tags($value);
				}
				
			$name=$array['user_name'];
			$publisher=$array['publisher'];
			$title=$array['title'];
			$description=$array['description'];
			$link=$array['link'];
			$date=time();
			$category=$catName;
			$subcategory=$subcatName;

			require '../../myArticle.php';
			$newArticle=new myArticle();
			$formattedDate=date('M/d/Y', $date);
				if(strpos($link, 'http:')==false)
					$link='http:' . $link;
					
			$newArticle->setMyArticle("$title", "$publisher", "$description", "$link", "$formattedDate", "$name");
			$articleHTML=$newArticle->getArticleHTML();

			require '../../connectToDatabase.php';
			$statement = $db->prepare("INSERT INTO myarticle VALUES(?, ?, ?, ?, ?, ?)");
			$statement->bind_param('sssssi', $publisher, $category, $subcategory, $link, $articleHTML, $date);
				if(!$statement->execute())
					die('There was an error running the querySubmitVideo0 [' . $statement->error . ']');
			print "Your video has been submitted!";
			}
?>