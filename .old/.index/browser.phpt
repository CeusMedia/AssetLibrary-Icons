<?php
return '<html>
  <head>
    <title>CeuS Media IconBrowser</title>
    <style>
* {
	font-family: Tahoma;
	font-size: 10px;
	}
div#pos {
	float: right;
	}
div#pos:after {
	clear: both;
	}
div#zoom {
	position: absolute;
	border: 1px solid black;
	background: #FFFFDF;
	padding: 10px;
	left: -1000px;
	opacity: 0.75;
	}
div#zoom img {
	width: 100%;
	}
div#zoom span {
	font-weight: normal;
	}
    </style>
    <script src="http://js.ceus-media.de/jquery/1.2.3.pack.js"></script>
    <script src="http://js.ceus-media.de/jquery/cmImageZoom.js"></script>
  </head>
  <body>
    <div id="pos">
    </div>
    <b>IconBrowser </b> 
    '.$folders.'
    <hr/>
    '.$files.'
    <div id="zoom"></div>
  </body>
  <script>
$("img.zoomable").cmImageZoom({position: "#pos", smallerThan: 32, showURL: false});
  </script>
</html>';
?>