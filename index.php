<?php
if(isset($_POST['data'])){

$data = $_POST['data'];

//removing the "data:image/png;base64," part
$uri =  substr($data,strpos($data,",")+1);


$filenamex = time();

$filename = 'imgs/'.$filenamex.'.png';

// put the data to a file
file_put_contents($filename, base64_decode($uri));
///*
	//force user to download the image
	if(file_exists($filename)){
			// We'll be outputting a PNG
			header('Content-type: image/png');
			// It will be called wow.png
			header('Content-Disposition: attachment; filename="'.$filename.'"');
			// The PDF source is in wow.png
			readfile($filename);
			exit();
	}
	//*/
//header('Location:http://motyar.info/draw/'.$filenamex);
}

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Drawing on web with Canvas and Jquery</title>
	<link rel="shortcut icon" href="favicon.ico">  
    <link rel="icon" type="image/ico" href="favicon.ico">
    <meta name="author" content="Motyar D">
    <meta name="keywords" content="JQuery, HTML5,Draw on web, Drawing on web, Motyar">
    <meta name="description" content="How to freehand draw on web with Canvas and JQuery">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold|Inconsolata|Droid+Serif:regular,bold">
	<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript" ></script>
   <script type="text/javascript" src="app.js"></script>
   <script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-9361092-10']);
		  _gaq.push(['_trackPageview']);
		  (function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		</script>
</head>
<body>
<h1>Creating your Drawing App is easier than you think!</h1>
<h2>Make it live today, without learning all that Programming languages.</h2>
<h3>Thanks very much - great code :-) - <i>Robert McCabe</i></h3>

<form name="_xclick" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="sidana_01@yahoo.co.in">
<input type="hidden" name="image_url" value="">
<input type="hidden" name="cpp_header_image" value="">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="item_name" value="Drawing with jQuery on Canvas Script">
<input type="hidden" name="amount" value="12.00">
</form>
<a class="download" onclick="document._xclick.submit();" >Buy It for just $12</a>
<!-- <h1>Try it, before you buy it</h1> -->
<div id="themain">
<canvas id="can" width="450" height="400" ></canvas>
<div id="clr">
<div style="background-color:black;"></div>
<div style="background-color:red;"></div>
<div style="background-color:green;"></div>
<div style="background-color:orange;"></div>
<div style="background-color:#FFFF00;"></div>
<div style="background-color:#F43059;"></div>
<div style="background-color:#ff00ff;"></div>
<div style="background-color:#9ecc3b;"></div>
<div style="background-color:#fbd;"></div>
<div style="background-color:#fff460;"></div>
<div style="background-color:#F43059;"></div>
<div style="background-color:#82B82C;"></div>
<div style="background-color:#0099FF;"></div>
<div style="background-color:#ff00ff;"></div>
<div style="background-color:rgb(128,0,255);"></div>
<div style="background-color:rgb(255,128,0);"></div>
<div style="background-color:rgb(153,254,0);"></div>
<div style="background-color:rgb(18,0,255);"></div>
<div style="background-color:rgb(255,28,0);"></div>
<div style="background-color:rgb(13,54,0);"></div>

</div><br /><br />
Pen size: <input type="range" min="0" max="50" value="5" id="bsz"/><br />
<br />
Pen color: <input type="color" placeholder="#FF00FF"  value="#FF00FF" id="bcl"/><br />
<div id="btns">
<a href="#themain" id="undo" class="minimal" >Undo</a>
<a id="save" href="#themain" class="minimal">Save</a>
<a id="eraser" href="#themain" class="minimal">Eraser</a>
<a href="#themain" id="clear" class="minimal" >Clear</a>
</div>

<span id="result" ><br /></span> 
<form action="" method="post" id="frm"/>
<input type="hidden" name="data" id="data" />
</form>
<br /><br style="clear:both;"/>
<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style " style="margin:0 auto;width:400px;">
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
<a class="addthis_button_tweet"></a>
<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
<a class="addthis_counter addthis_pill_style"></a>
</div>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4ece1a1424fed0b1"></script>
<!-- AddThis Button END -->
</div>
<h1>The best code base to create your first canvas drawing application.</h1>
<h2>If you are a programmer, this code can help you to get started with <i>freehand draw mechanism</i>, and Discover how to use HTML5 canvas element just like a artist's canvas.</h2>

<h1>It works or it's free.</h1>
<h2>Not sure this system is for you? Try it and if you're not happy, I'll give you your money back and you keep everything.</h2>

<a class="download" onclick="document._xclick.submit();" >Buy It for just $12</a>
<h3>Note: After payment successful, you will get draw.zip file from <a href="mailto:dharmmotyar@gmail.com">dharmmotyar@gmail.com</a> within 24 hours. If any queries please contact this mail id.</h3>
<h3>Money back guaranteed, no questions. Instant delivery & awesomeness.</h3>

<div id="footer">
by <a href="http://twitter.com/motyar" >@motyar</a>
</div>
</body>
</html>