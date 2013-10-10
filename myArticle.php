<?php
	 class myArticle{
		private $articleTitle;
		private $articleVideoPublisher;
		private $articleDescription;
		private $articleLink;
		private $articleDate;
		private $articleHTML;
		private $articleUser;
		
		public function setMyArticle($title, $publisher,  $description, $link, $date, $user)
		{
		$this->articleTitle=str_replace('\'', "", $title);
		$this->articleVideoPublisher=str_replace('\'', "", $publisher);
		$this->articleDescription=str_replace('\'', "", $description);
		$this->articleLink=str_replace('\'', "", $link);
		$this->articleDate=str_replace('\'', "", $date);
		$this->articleUser=str_replace('\'', "", $user);
		}
		
		public function getArticleHTML()
		{
		require 'connectToDatabase.php';
			 
		if(!$publisherInfo=$db->query("SELECT homePageLink, rating FROM publisherinfo WHERE userName=\"{$this->articleVideoPublisher}\""))
			die('There was an error running the query [' . $db->error . ']');
		$row=$publisherInfo->fetch_assoc();
		if($publisherInfo->num_rows==0)
		{
		$articleHTML=<<<HTMLBLOCK
		<article>
			<header>
				<hgroup>
				<h1>$this->articleTitle</h1>
				<h2>$this->articleVideoPublisher</h2>
				</hgroup>
			</header>
			<br>
			<p>$this->articleDescription</p>
			<center>
            <a class="youtube-lazy-link" href="{$this->articleLink}"></a>
			<center>
			<footer>$this->articleUser - $this->articleDate</footer>
		</article>
HTMLBLOCK;
		return $articleHTML;
		}
		else
		{
		$publisherUrl='http://www.youtube.com/' . $this->articleVideoPublisher;
		$title=$this->articleVideoPublisher;
		if(!$featuredChannels=$db->query("SELECT rating FROM publisherinfo WHERE userName='$title'"))	
				die('There was an error connecting: querymysubcat2 [' . $db->error . ']');
		$eachChannel=$featuredChannels->fetch_assoc();
		$rating=$eachChannel['rating'];
		$articleHTML=<<<HTMLBLOCK
		<article>
			<header>
				<hgroup>
				<h1>$this->articleTitle</h1>
				<h2> <div class="publisherAndStars"> <a class="publisherLinks" href="$publisherUrl">$this->articleVideoPublisher</a>  <div class="star" data-score="$rating"> </div> </div> </h2>
				</hgroup>
			</header>
			<br>
			<p>$this->articleDescription</p>
			<center>
				<a class="youtube-lazy-link" href="{$this->articleLink}"></a>
			<center>
			<footer>$this->articleUser - $this->articleDate</footer>
		</article>
HTMLBLOCK;
		return $articleHTML;
		}
		}
	}
?>