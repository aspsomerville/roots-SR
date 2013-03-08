<header id="banner" class="navbar" role="banner">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      
 <nav id="nav-main" class="nav-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
</nav>
    
      <a href="<?php echo home_url(); ?>" rel="nofollow">
		<img id="logo" src="<?php echo home_url(); ?>/assets/img/logo-text.png" alt="Jane Gauntlett" style="display: block; margin: 0 auto;"></img>
      </a>
	<ul class="jane-is">
		<li><h4>Creative Producer</h4></li>
		<li><h4>Writer</h4></li>
		<li><h4>Film-Maker</h4></li>
		<li><h4>Stylist</h4></li>
		<li>
			<a href="https://twitter.com/ExplorerOfSorts" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false" data-dnt="true">Follow @ExplorerOfSorts</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</li>
		
		<li>
		<iframe class="facebook-like" src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fjanegauntlett.org&amp;send=false&amp;layout=button_count&amp;width=80&amp;show_faces=true&amp;action=like&amp;colorscheme=light&amp;font=lucida+grande&amp;height=25" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:25px;" allowTransparency="true"></iframe>
		</li>

		<li>
<!-- Place this tag in your head or just before your close body tag. -->
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
  {lang: 'en-GB'}
</script>

<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-size="medium" data-href="http://janegauntlett.org"></div>
		</li>

	</ul>


<!-- LATEST TWEET -->
<div id="tweet_bar">
<?php
// Your twitter username.
$username = "ExplorerOfSorts";
// Prefix - some text you want displayed before your latest tweet. 
// (HTML is OK, but be sure to escape quotes with backslashes: for example href=\"link.html\")
$prefix = "<p style=\"font-family: NouveauRegular; font-size: 18px; color: #000; display: block; float: left; margin: 0px 10px; line-height: 2;\">Twitter|</p><p>";
// Suffix - some text you want display after your latest tweet. (Same rules as the prefix.)
$suffix = "</p>";
$feed = "http://search.twitter.com/search.atom?q=from:" . $username . "&rpp=1";
function parse_feed($feed) {
    $stepOne = explode("<content type=\"html\">", $feed);
    $stepTwo = explode("</content>", $stepOne[1]);
    $tweet = $stepTwo[0];
    $tweet = str_replace("&lt;", "<", $tweet);
    $tweet = str_replace("&gt;", ">", $tweet);
    return $tweet;
}
$twitterFeed = file_get_contents($feed);
echo stripslashes($prefix) . parse_feed($twitterFeed) . stripslashes($suffix);
?>
</div>
<!-- END LATEST TWEET -->


     




    </div>
  </div>
</header>