<?php

function top() {
  ?>
  <html>
  <head>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css"/>
    <link rel="stylesheet" href="/style.css"/>
    <script src="/jquery.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=743342905682343";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
  <?php
}

function bottom() {
  ?>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-6324294-27', 'reformact.ca');
	  ga('send', 'pageview');
	
	</script>
  </body>
  </html>
  <?php
}

function shareButtons($text,$url) {
?>
<div style="display: inline-block">
<div class="fb-like"
  data-href="<?php print $url; ?>"
  data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
</div>
<div style="display: inline-block">
<a class="twitter-share-button" href="https://twitter.com/share"
  data-hashtags="reformact,cdnpoli"
  data-via="TheReformAct"
  data-text="<?php print $text; ?>"
  data-url="<?php print $url; ?>"
  data-lang="en">Tweet</a>
</div>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<?php
}

?>


