<?php

	session_start();
	
	if(!isset($_SESSION["auth"]) or !$_SESSION["auth"])
	{		
		header('Location: login.php');		
	}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Scouts de Portneuf</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <script src="js/modernizr.js"></script>
  </head>
  <body>
    
    <div class="row">
		<a href = "index.html"><img src="img/entete.jpg"/></a>
    </div>
    
    <div id="page" class="row panel">
		<div class="large-3 medium-4 columns">
			<div class="row">
				<div class="large-12 medium-12 columns text-center">
					<ul class="side-nav">
						<li><a href="index.html" class="button radius round">Accueil</a></li>
						<li><a href="branches.html" class="button radius round">Branches</a></li>
						<li><a id="current" href="photos.php" class="button radius round">Photos</a></li>
						<li><a href="calendrier.html" class="button radius round">Calendrier</a></li>
						<li><a href="commanditaires.html" class="button radius round">Commanditaires</a></li>
						<li><a href="contacter.html" class="button radius round">Nous Contacter</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="panel" class="large-9 medium-8 columns">
			<div class="row">
				<div class="large-12 columns text-center">
					<div class="callout panel ombre">
					<h1>Photos</h1>
					<embed type="application/x-shockwave-flash" src="https://picasaweb.google.com/s/c/bin/slideshow.swf" width="288" height="192" flashvars="host=picasaweb.google.com&hl=fr&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F100984745646961593272%2Falbumid%2F5808149082546941377%3Falt%3Drss%26kind%3Dphoto%26authkey%3DGv1sRgCPbe-ebvtfqBIw%26hl%3Dfr" pluginspage="http://www.macromedia.com/go/getflashplayer">
					</embed>
					
					<embed type="application/x-shockwave-flash" src="https://picasaweb.google.com/s/c/bin/slideshow.swf" width="288" height="192" flashvars="host=picasaweb.google.com&hl=fr&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F100984745646961593272%2Falbumid%2F5773589874060182097%3Falt%3Drss%26kind%3Dphoto%26authkey%3DGv1sRgCM2Zhb7wudWk0AE%26hl%3Dfr" pluginspage="http://www.macromedia.com/go/getflashplayer">
					</embed>
					
					<embed type="application/x-shockwave-flash" src="https://picasaweb.google.com/s/c/bin/slideshow.swf" width="288" height="192" flashvars="host=picasaweb.google.com&hl=fr&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F100984745646961593272%2Falbumid%2F5758384334208567121%3Falt%3Drss%26kind%3Dphoto%26authkey%3DGv1sRgCO7DrpW06IenZg%26hl%3Dfr" pluginspage="http://www.macromedia.com/go/getflashplayer">
					</embed>
				
					<embed type="application/x-shockwave-flash" src="https://picasaweb.google.com/s/c/bin/slideshow.swf" width="288" height="192" flashvars="host=picasaweb.google.com&hl=fr&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F100984745646961593272%2Falbumid%2F5853000235618722017%3Falt%3Drss%26kind%3Dphoto%26authkey%3DGv1sRgCKHTs47u0vGL_QE%26hl%3Dfr" pluginspage="http://www.macromedia.com/go/getflashplayer">
					</embed>
					
					<embed type="application/x-shockwave-flash" src="https://photos.gstatic.com/media/slideshow.swf" width="288" height="192" flashvars="host=picasaweb.google.com&hl=fr&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F100984745646961593272%2Falbumid%2F6079852663262364049%3Falt%3Drss%26kind%3Dphoto%26authkey%3DGv1sRgCPjb9JqA-7q6Eg%26hl%3Dfr" pluginspage="http://www.macromedia.com/go/getflashplayer">
					</embed>
					
					<embed type="application/x-shockwave-flash" src="https://photos.gstatic.com/media/slideshow.swf" width="288" height="192" flashvars="host=picasaweb.google.com&hl=fr&feat=flashalbum&RGB=0x000000&feed=https%3A%2F%2Fpicasaweb.google.com%2Fdata%2Ffeed%2Fapi%2Fuser%2F100984745646961593272%2Falbumid%2F6151766453773181441%3Falt%3Drss%26kind%3Dphoto%26authkey%3DGv1sRgCOGCnsb83q7GOg%26hl%3Dfr" pluginspage="http://www.macromedia.com/go/getflashplayer">
					</embed>				
					</div>
				</div>
			</div>	
		</div>
    </div>
	
    <script src="js/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
