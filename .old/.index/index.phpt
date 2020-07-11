<?php
return '
<html>
  <head>
    <title>Icons @ CeuS Media</title>
    <link rel="stylesheet" href="http://ceus-media.de/site/contents/themes/cm5/css/screen.css"/>
    <style>
h3 {
	background: #DFDFDF;
	padding: 0.2em 0.5em 0.2em 0.5em;
	border-width: 0px;
	-moz-border-radius-topleft: 0.3em;
	-moz-border-radius-topright: 0.3em;
}
div.folder {
	background: #EFEFEF;
	border: none;
	margin-bottom: 0.5em;
	padding: 0.5em;
	-moz-border-radius-bottomleft: 0.6em;
	-moz-border-radius-bottomright: 0.6em;
	}
ul ul li {
	list-style: square;
	}
ul ul ul li {
	list-style: disc;
	}
	</style>
  </head>
  <body>
    <div id="container" style="width: 400px">
      <img src="http://ceus-media.de/site/contents/themes/cm5/images/head_logo.png"/>
      <div id="field">
        <h2>CeuS Media Icons Collection</h2>
        This Collection of Icons consists of
        <br/>
        '.$list.'
      </div>
    </div>
  </body>
</html>';
?>