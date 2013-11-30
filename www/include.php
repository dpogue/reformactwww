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

?>


