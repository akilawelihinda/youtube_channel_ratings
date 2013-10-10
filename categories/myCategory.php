<?php
class myCategory{
private $category;
private $subcats;
private $main_div;
private $side_div;
private $realCategory;
	
	public function setMyCategory($cat, $realCat, $sub){
	$this->category=$cat;
	$this->realCategory=$realCat;
	$this->subcats=$sub;
	}
	
	public function printCategoryHTML(){
	require '../connectToDatabase.php';
	$title=$this->category;
	if(!$db->query("UPDATE categorytrack SET Number=Number+1 WHERE Category=\"$title\""))	
			die('There was an error connecting: mycat0 [' . $db->error . ']');
		
	if(!$recentlyAdded=$db->query("SELECT articlehtml, subcategory FROM myarticle WHERE category=\"{$this->category}\" ORDER BY timeSubmitted DESC LIMIT 7"))
		die('There was an error connecting: querymycat1 [' . $db->error . ']');
	
	$subcatDescription=implode(', ', $this->subcats);
			function str_lreplace($search, $replace, $subject){
				$pos = strrpos($subject, $search);
				if($pos !== false)
					$subject = substr_replace($subject, $replace, $pos, strlen($search));
				return $subject;
			}
	$subcatDescription=str_lreplace(", ", ", and ", $subcatDescription);
	$title="Browse {$this->realCategory} Youtube channel reviews, ratings, and videos | Youtube Channel Ratings";
	$description="Browse Youtube videos, channel reviews, and ratings from the {$this->realCategory} category. Browse {$this->realCategory} subcategories like $subcatDescription";
	require 'categoryHeadFile.php'; 
	print '<body> <div id="big_wrapper"> <div id="top_div">';
		if($this->realCategory)
		$pageName=<<<HTMLBLOCK
		<a href="../categories.php" class="categoryWhiteLinks">Categories-</a> <a href="{$this->category}.php" class="categoryWhiteLinks">{$this->realCategory}<a/>
HTMLBLOCK;
		else
		$pageName=<<<HTMLBLOCK
		<a href="../categories.php"class="categoryWhiteLinks">Categories -</a> <a href="{$this->category}.php" class="categoryWhiteLinks">{$this->category}<a/>
HTMLBLOCK;
		
	require 'categoryHeaderFile.php';
	
	print <<<HTMLBLOCK
	</div> <div id="main_div"> <section id="main_section">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="../raty/lib/jquery.raty.min.js"></script>
		
		<script>
		$(document).ready(function(){
			$('.star').raty({ 
			readOnly: true,
			score: function() {
				return $(this).attr("data-score");
			  },
			 starOff: '../raty/lib/img/star-off.png',
			starOn : '../raty/lib/img/star-on.png',
			starHalf: '../raty/lib/img/star-half.png'
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
	//put main_div here
		while($oneArticle=$recentlyAdded->fetch_assoc())
		{
		$subcat=$oneArticle['subcategory'];
		$queryString="SELECT displayName FROM subcategorytrack WHERE name='$subcat'";
				if(!$subcatObject=$db->query("$queryString"))
					die('There was an error connecting: queryMyCat2 [' . $db->error . ']');
		$q=$subcatObject->fetch_assoc();
		$subcategoryDisplay=$q['displayName'];
		$oneArticle['articlehtml']=str_replace('</h1>', " - <a class=\"categoryLinks\" href=\"subcats/$subcat.php\">$subcategoryDisplay</a></h1>", $oneArticle['articlehtml']);
		print "{$oneArticle['articlehtml']}";
		}
	//end main_div
	
	$counter=0;
			print "</section></div> <div id=\"side_div\"> <aside id=\"side_news\"> <h4> $this->realCategory </h4> <ul>";
	//put side_div here
		while($counter<sizeof($this->subcats))
		{
		$dispName=$this->subcats[$counter];
		if(!$subcatObject=$db->query("SELECT name FROM subcategorytrack WHERE displayname='$dispName'"))	
			die('There was an error connecting: querymycat3 [' . $db->error . ']');
		$q=$subcatObject->fetch_assoc();
		print <<<HTMLBLOCK
		<li> <a class="categoryLinks" href="subcats/{$q['name']}.php"> {$this->subcats[$counter]} </a></li>
HTMLBLOCK;
		$counter++;
		}
	//end side_div
	
	print '</ul> </aside> </div> <div id="footer_div">';
	require 'categoryFooterFile.txt';
	print '</div> </div> </body>';
	}
}
?>