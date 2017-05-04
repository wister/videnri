<?php
/*require_once "mobiledetect.php";
$detect = new Mobile_Detect;

if( $detect->isMobile() ){
	header('Location: http://mobile.videnri.com');
    exit;
}*/
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="videnri-favicon.png" />
<title>Videnri</title>
<style type="text/css">
	@font-face {
		font-family: "Nexa Bold";
		src: url("Nexa Bold.otf");
	}
	html {
		overflow: auto;
		height: 100%;
		width: 100%;
	}
	body {
		margin: 0;
		font-family: "Nexa Bold";
		background-color: #7A7A7A;
		height: 100%;
		width: 100%;
	}
	div#intro {
		position: absolute;
		display: none;
		margin: 0;
		left: 0px;
		top: 0px;
		width: 100%;
		height: 100%;
		background: #7A7A7A url(videnri.png) no-repeat center center;
		z-index: 12;
	}
		div#intro:hover, div#overlay:hover {
			cursor: pointer;
		}

		div#overlay {
			position: absolute;
			display: block;
			margin: 0;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			background: #7A7A7A;
			z-index: 10;
		}
		div#loading{
						position: absolute;
						display: none;
						z-index: 13;
						width: 100%;
						height: 3vh;
						top: calc(14vh + 3vh - 1.5vh);
						background: url(loading.gif) no-repeat center center;
						background-size: auto 3vh;
		}

	div#main {
		//width: 1250px;
		width: 100%;
		/*height: 618px;*/
		height: 100%;
		background-color: #7A7A7A;
		background: url(moon-background.jpg);
	}

		/*
		div#main div {
			width: calc(100% / 3);
			height: 50%;
			background-color: #9b59b6;
			display: inline-block;
			border-radius: 50%;
		}
		*/

	div#upper {
		height: calc(1000px / 3 / 2);
		display: inline-block;
	}
	div#upper div#logo, div#upper div#upper-title {
		display: inline-block;
	}
		div#logo {
			width: calc(1000px / 3 / 2);
			height: 100%;
			background: url(logo.png) no-repeat center center;
		}
		div#upper-title {
			width: calc(100% - (1250px / 3 / 2));
			height: calc(1000px / 3 / 2);
			position: absolute; /*SUPER IMPORTANTE*/
		}
			div#upper-title div#upper-title-container {
				margin: 0 auto;
				width: calc((3 * 1250px / 3 / 2) + (2 * 2 * 1250px / 3 / 2 * 0.2));
				text-align: right;
			}
				div#upper-title div#upper-title-container div#title{
					position: relative;
					margin-top: 96px; /*Medido con regla*/
					color: #FFFFFF;
					font-size: 14.5pt;
				}
	div#bottom {
		height: calc(100% - (1000px / 3 / 2))
	}

	div#bottom div#bottom-nav, div#bottom div#bottom-content {
		display: inline-block;
	}
			div#bottom-nav {
				width: calc(1000px / 3 / 2);
				/*height: calc(618px - (1250px / 3 / 2));*/
				height: 100%;
				background: white;
				background-image:
					linear-gradient(
						to right,
						#cdcdcd,
						white 20% /*begin white from 20% of width*/
					);
				font-size: 8.5pt;
				color: #7A7A7A;
				line-height: 20px;
				position: relative;
			}
						div#bottom-nav div a:hover {
							cursor: pointer;
						}

						div#upper-title a.hover {
							cursor: pointer;
						}
						div#upper-title a.nohover {
							cursor: default;
						}

						div#bottom-nav-links {
							width: calc(1000px / 3 / 2);
							text-align: left;
							padding-left: 20%;
							top: 40px;
							position: relative;
						}

						div#bottom-nav-footer {
							width: calc(1000px / 3 / 2);
							text-align: center;
							position: absolute;
							bottom: calc(2 * 1000px / 3 / 2 * 0.2);
						}
									div#bottom-nav-footer a#Q{
										font-size: 50px;
										display: none;
									}
									div#language {
										width: calc(1000px / 3 / 2);
										text-align: center;
										position: absolute;
										bottom: 20px;
									}

		div#bottom-content {
			position: absolute;
			//width: calc(1250px * 5 / 6);
			width: calc(100% - (1250px / 3 / 2));
			/*height: calc(618px - (1250px / 3 / 2));*/
		}

					/*

							CIRCLES

					*/

					/*
						old container	width: calc((3 * 1250px / 3 / 2) + (2 * 2 * 1250px / 3 / 2 * 0.2));		773px
										height: calc((1250px / 3 / 2) + (2 * 1250px / 3 / 2 * 0.2));			467px

						new	container	width: calc((3 * 1250px / 3 / 2) + (2 * 2 * 1250px / 3 / 2 * 0.2));		773px
										height: calc((2 * 1250px / 3 / 2) + (1 * 2 * 1250px / 3 / 2 * 0.2));	400px
					*/

				div#bottom-circles-container {
					width: calc((3 * 1250px / 3 / 2) + (2 * 2 * 1250px / 3 / 2 * 0.2));
					height: calc((2 * 1250px / 3 / 2) + (1 * 2 * 1250px / 3 / 2 * 0.2));
					position: relative;
					margin: 0 auto;
					//border: 1px solid black;
				}

				div#bottom-circles-container div {
					/*display: inline-block;*/
				}

				div#bottom-circles-container div.mid-circle {
					border-radius: 50%;
					width: calc(1250px / 3 / 2);
					height: calc(1250px / 3 / 2);
					background-color: #FFFFFF;
					text-align: center;
					position: absolute;
					overflow: hidden;
				}
							div.midmid-one{
								top: 0px;
								left: 0px;
							}
							div.midmid-two{
								top: 0px;
								left: calc( ((3 * 1250px / 3 / 2) + (2 * 2 * 1250px / 3 / 2 * 0.2))*0.50 - (1250px / 3 / 2)/2 ); /* Middle horizontal position in mid circles */
							}
							div.midmid-three{
								top: 0px;
								left: calc( ((3 * 1250px / 3 / 2) + (2 * 2 * 1250px / 3 / 2 * 0.2)) - (1250px / 3 / 2) ); /* Final position on horizontal axis*/
							}
							div.midmid-four{
								top: calc( ((2 * 1250px / 3 / 2) + (1 * 2 * 1250px / 3 / 2 * 0.2)) - (1250px / 3 / 2) );
								left: 0px;
							}
							div.midmid-five{
								top: calc( ((2 * 1250px / 3 / 2) + (1 * 2 * 1250px / 3 / 2 * 0.2)) - (1250px / 3 / 2));
								left: calc( ((3 * 1250px / 3 / 2) + (2 * 2 * 1250px / 3 / 2 * 0.2))*0.50 - (1250px / 3 / 2)/2 );
							}
							div.midmid-six{
								top: calc( ((2 * 1250px / 3 / 2) + (1 * 2 * 1250px / 3 / 2 * 0.2)) - (1250px / 3 / 2) );
								left: calc( ((3 * 1250px / 3 / 2) + (2 * 2 * 1250px / 3 / 2 * 0.2)) - (1250px / 3 / 2) );
							}

				div#bottom-circles-container div.mid-circle a {
					position: relative;
					top: calc(50% - (9.5pt/2)); /* Needs to be adjuted. http://zerosixthree.se/vertical-align-anything-with-just-3-lines-of-css/*/
					-webkit-transform: translateY(-50%);
					-ms-transform: translateY(-50%);
					transform: translateY(-50%);
				}

				div#bottom-circles-container div.mid-circle div {

				}

				div#bottom-circles-container div.mid-circle img {
					position: absolute;
					width: calc(1250px / 3 / 2);
					height: calc(1250px / 3 / 2);
					top: 0;
					bottom: 0;
					left: 0;
					right: 0;
					margin: auto;
				}


				div.small-circle {
					position: absolute;
					width: calc(((2 * 1250px / 3 / 2) + (1 * 2 * 1250px / 3 / 2 * 0.2)) * 3/11);
					height: calc(((2 * 1250px / 3 / 2) + (1 * 2 * 1250px / 3 / 2 * 0.2)) * 3/11);
					border-radius: 50%;
					background-color: #FFFFFF;
					overflow: hidden;

				}
						div.small-one {
							left: 0px;
							top: 0px;
						}
						div.small-two {
							left: 0;
							top: calc(50% - (((2 * 1250px / 3 / 2) + (1 * 2 * 1250px / 3 / 2 * 0.2)) * 3/11)/2); /* 50% - height/2 */
						}
						div.small-three {
							left: 0;
							top: calc(((2 * 1250px / 3 / 2) + (1 * 2 * 1250px / 3 / 2 * 0.2)) * 8/11);
						}
									/*
										SMALL IMAGES
									*/
									div.small-circle img {
										width: 136px;
										height: 136px;
										top: 0;
										bottom: 0;
										left: 0;
										right: 0;
										margin: auto;
										position: absolute;
									}

				div.big-circle{
					position: absolute;
					width: calc(((2 * 1250px / 3 / 2) + (1 * 2 * 1250px / 3 / 2 * 0.2)) * 11/11);
					height: calc(((2 * 1250px / 3 / 2) + (1 * 2 * 1250px / 3 / 2 * 0.2)) * 11/11);
					border-radius: 50%;
					background-color: #FFFFFF;
					left: calc((3 * 1250px / 3 / 2) + (2 * 2 * 1250px / 3 / 2 * 0.2) - ((2 * 1250px / 3 / 2) + (1 * 2 * 1250px / 3 / 2 * 0.2)));
					top: calc(50% - (((2 * 1250px / 3 / 2) + (1 * 2 * 1250px / 3 / 2 * 0.2)) * 11/11)/2); /*50% - height/2 */
					overflow: hidden;
				}
						div.big-circle div {
							width: 500px;
							height: 500px;
							top: 0;
							bottom: 0;
							left: 0;
							right: 0;
							margin: auto;
							position: absolute;
						}
						div.big-circle div img {
							width: 500px;
							height: 500px;
						}
								div#colors{
									position: absolute;
									display: none;
									border-radius: 50%;
									background-color: #7A7A7A;
									width: 50px;
									height: 50px;
									top: calc(100% - 50px);
									left: calc(100% - 50px);
								}
										div#colors:hover {
											cursor: pointer;
										}

				div.small-circle:hover, div.mid-circle:hover{
					cursor: pointer;
					/*
					-moz-box-shadow:    inset 0 0 2px black;
					-webkit-box-shadow: inset 0 0 2px black;
					box-shadow:         inset 0 0 2px black;
					*/
				}
				div.big-circle:hover {
					cursor: url(zoom.png), pointer;
				}

	/*

		FOOTER

	*/
	div#form {
		width: calc((3 * 1250px / 3 / 2) + (2 * 2 * 1250px / 3 / 2 * 0.2));
		height: calc((2 * 1250px / 3 / 2) + (1 * 2 * 1250px / 3 / 2 * 0.2));
		position: relative;
		margin: 0 auto;
	}

				div#form textarea {
					font-family: "Nexa Bold";
					font-size: 13.5pt;
					color: #7A7A7A;
					resize: none;
					box-sizing: border-box;
					border-width: 0;
					padding: 20px;
					width: 100%;
					height: 86%;
				}

				div#arroba {
					background: url("@.png") no-repeat center center;
					background-size: 97%;
					width: 5%;
					height: 8%;
					top: 92%;
					position: absolute;
				}

				div#form input#email {
					font-family: "Nexa Bold";
					font-size: 13.5pt;
					color: #7A7A7A;
					width: 40%;
					height: 7%;
					top: 92%;
					left: 7%;
					padding-left: 8px;
					position: absolute;
				}
							textarea:focus, input:focus{
								outline: 0;
							}

				div#attach {
					background: url("+.png") no-repeat center center;
					background-size: 97%;
					width: 32px;
					height: 32px;
					top: 92%;
					left: 49%;
					position: absolute;
					display: none; /* REVISION */
				}

				img#send {
					background: url("avion.png") no-repeat center center;
					background-size: 100%;
					width: 35px;
					height: 35px;
					/*top: calc(100% - 35px);*/
					top: 92%;
					left: calc(100% - 35px);
					/*left: 100%;*/
					position: absolute;
				}
				img#send:hover {
					cursor: pointer;
				}

	div#size {
		width: calc((3 * 1250px / 3 / 2) + (2 * 2 * 1250px / 3 / 2 * 0.2));
		height: calc((2 * 1250px / 3 / 2) + (1 * 2 * 1250px / 3 / 2 * 0.2));
		position: relative;
		margin: 0 auto;
		background: url("size.png") no-repeat center center;
	}
			div#sizing {
				width: 100%;
				height: 100%;
				margin: 0 auto;
				background: url("size-en.png") no-repeat center center;
			}

	div#follow {
		width: calc((3 * 1250px / 3 / 2) + (2 * 2 * 1250px / 3 / 2 * 0.2));
		height: calc((2 * 1250px / 3 / 2) + (1 * 2 * 1250px / 3 / 2 * 0.2));
		position: relative;
		margin: 0 auto;
	}
		div.social {
			position: absolute;
			width: 114px;
			height: 114px;
			background-color: white;
			border-radius: 50%;
		}
			div.social:nth-child(1) {
				top: calc(50% - 57px);
				left: 0px;
			}
			div.social:nth-child(2) {
				top: calc(50% - 57px);
				left: calc(114px + (100% - (114px*4))/3 );
			}
			div.social:nth-child(3) {
				top: calc(50% - 57px);
				left: calc( 114px*2 + (100% - (114px*4))/3*2);
			}
			div.social:nth-child(4) {
				top: calc(50% - 57px);
				left: calc(100% - 114px);
			}
		div.social img{
			width: 114px;
			height: 114px
		}


	span#fly {
		display: none;
		position: absolute;
		color: white;
		font-size: 8.5pt;
	}

	span.pricetag {
		top: 15px;
		display: none;
		position: absolute;
		font-size: 8.5pt;
		color: #7A7A7A;
	}

	span#price {
		font-size: 8.5pt;
		color: #7A7A7A;
	}

	div#css-variables {
		position: absolute;
		display:none;
	}
				div#css-variables span#mid-circle {
					width: calc(1250px / 3 / 2);
				}
				div#css-variables span#small-circle {
					width: calc(((2 * 1250px / 3 / 2) + (1 * 2 * 1250px / 3 / 2 * 0.2)) * 3/11);
				}
				div#css-variables span#big-circle {
					width: calc(((2 * 1250px / 3 / 2) + (1 * 2 * 1250px / 3 / 2 * 0.2)) * 11/11);
				}
				div#css-variables span#social-circle {
					width: 114px;
				}
</style>
</head>
<body>
	<div id="main">
	<div id="intro"></div>
	<div id="overlay"></div>
	<div id="loading"></div>
		<div id="upper">
			<div id="logo"></div><div id="upper-title"><div id="upper-title-container"><div id="title"><a></a></div></div></div>
		</div>
		<div id="bottom">
			<div id="bottom-nav"><div id="bottom-nav-links">
<?php
	if ($handle = opendir('.')){
	$order = array();
	$blacklist = array('.', '..', "test");
	while (false !== ($file = readdir($handle))) {
		if (!in_array($file, $blacklist) && is_dir($file)) {

			$fh = fopen("$file/ORDER.txt", 'r');
			$ordernumber = fread($fh, 1);
			fclose($fh);

			$order[$ordernumber] = $file;

			//echo "<a>$file</a><br />";
			//echo "$ordernumber";
			//print_r($order);
		}
	}
	closedir($handle);

	for($i=1; $i <= sizeof($order); $i++){
		$value = $order[$i];
		$value = strtoupper($value);
		$value = str_replace("-", " ", $value);
		echo "<a>$value</a><br />";
	}

	}
?>
			</div><div id="bottom-nav-footer"><a>SIZE</a><br /><a>FOLLOW</a><br /><a>CONTACT</a><br /><br /><a id="Q">?</a></div><div id="language"><a>Español</a></div></div><div id="bottom-content"></div>
		</div>
		<span id="price">$20.00</span>
		<div id="css-variables"><span id="mid-circle"></span><span id="small-circle"></span><span id="big-circle"></span><span id="social-circle"></span></div>
		<span id="fly"></span>
	</div>

<script src="jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="jquery.color-2.1.2.min.js" type="text/javascript"></script>
<script src="jquery.transit.min.js" type="text/javascript"></script>
<script src="jquery.zoom.js" type="text/javascript"></script>
<script src="jquery.imgpreload.min.js" type="text/javascript"></script>
<script src="jquery.countdown.min.js" type="text/javascript"></script>
<script type="text/javascript">
	//jQuery.fx.off = true;
	var logging = false;
	var images = [];
	var randomImages = false;
	var quality = "-or8"; //Default (), Lossless(-nnn), lossy (-fs8)
	var animating = false;
	var chaining = true;
	var language = "English";
	var place;
	var currentlocation;
	var positions = [];
	var sections = {
			"CONTACT" : '<div id="form"><textarea id="message" name="message" maxlength="750" autocomplete="off"></textarea><div id="arroba"></div><input id="email" name="email" type="text" maxlength="100" placeholder="Your email" autocomplete="off"/><div id="attach"></div><img id="send" src="avion.png" /></div>',

			"SIZE": '<div id="size"><div id="sizing"></div></div>',

			"FOLLOWS": '<div id="follow"><div class="social"><a target="_blank" href="https://facebook.com/videnri"><img src="social-fb.png" /></a></div><div class="social"><a target="_blank" href="https://twitter.com/videnri"><img src="social-tw.png" /></a></div><div class="social"><a target="_blank" href="https://youtube.com/videnri"><img src="social-yt.png" /></a></div><div class="social"><a target="_blank" href="https://instagram.com/videnri"><img src="social-in.png" /></a></div></div>',

			"CONTAINERS" : '<div id="bottom-circles-container"></div>',

			"FOLLOW" : '',
	};

	var midCircles = ["midmid-one", "midmid-two", "midmid-three", "midmid-four", "midmid-five", "midmid-six"];
	var socialCircles = ["social0", "social1", "social2", "social3"];
	var socialImages = ["social-fb.png", "social-in.png", "social-tw.png", "social-yt.png"];
	var socialURLs = ["https://facebook.com/videnri", "https://instagram.com/videnri", "https://twitter.com/videnri", "https://youtube.com/videnri"];
	var midCircleWidth = $("div#css-variables span#mid-circle").width();
	var smallCircleWidth = $("div#css-variables span#small-circle").width();
	var bigCircleWidth = $("div#css-variables span#big-circle").width();
	var socialCircleWidth = $("div#css-variables span#social-circle").width();
	var spanPrice = $("span#price").width()+4;
	$("span#price").css("display", "none");
	//To be declared in Populate()

	var containerWidth;
	var containerHeight;
	var bigCircleSmallPosition = {}
	var cache = {}
	var globalCollection = "";
		cache.objects = []
		cache.extraColors = false;
		cache.names = JSON.parse(UrlExists("COLLECTIONS.txt"))
	$.each(cache.names, function(index, value){
		var objectName = value.replace(/-/g, "")
		cache.objects[cache.objects.length] = objectName
		cache[objectName] = {}
	});
	/*
				INTRO ANIMATION
	*/
$( document ).ready(function() {
	$("div#intro").delay(500).fadeIn(500);
	addHandlers(false, "collection")
	//addHandlers(false, "colors")
	/*
		TIMERS
	*/
	/*
	var left = $("div#bottom-nav").width()+20;
	var mirada = $("div a:contains('LA MIRADA MARSA')").offset()
	$("span#fly").css({"top": mirada.top, "left": left})
	addHandlers("div a:contains('LA MIRADA MARSA')", "fly")

	$('span#fly').countdown("2015/03/02 14:00:00", function(event) {
		$(this).text(event.strftime('%D:%H:%M:%S'))
		if(event.type == "finish"){
			addHandlers("div a:contains('LA MIRADA MARSA')", "collection")
			$("span#fly").fadeOut()
		}
	});
	*/
})

function addHandlers(selector, which){
	$(selector).unbind();
	if(which == "collection"){
			/*
				NAVIGATION LINKS
			*/
		if(selector == false){
			selector = "div#bottom-nav-links a";
		}
		$(selector).click(function(){
				if(animating == false){
					if($("div#colors").is(":visible")){
						$("div#colors").fadeOut()
					}

					globalCollection = $(this).text();
					if($(this).text() == $("div#upper-title a").text()){ //Clicking in same collection
						if (place == "containers"){
							makeSmalls(false);
						}
						else if(place == "view"){
							backTrack();
						}

					}
					else { //If not pressing same collection
						var thisCollection = $(this).text()
						if (place == "containers"){ //Coming from a mid area
							getFolderB(midToCollection);
						}
						else if (place == "view"){ //Coming from a view area
							backTrack(function(){
								getFolderB(midToCollection)
							});
						}
						else if(place == "follow"){
							getFolderB(FollowToCollection)
						}
						else { //Webpage is recently opened
								getFolderB(function(collection){
									gotoSection("CONTAINERS", collection, function(){
										Populate(displayCollection);
									}, place);
								});

						}
					}
				}
		})
	}
	else if(which == "fly"){
		$(selector).click(function(){
			$("span#fly").fadeToggle()
		});
	}
	else if(which == "colors"){
		$("div#colors").click(nextColor)
	}
}

$("div#intro, div#overlay").click(function() {
		if($(window).height() < 720){
			$("div#main").height(720)
		}
		if($(window).width() < 900){
			$("div#main").width(900)
		}

		if(animating == false){
			animating = true;
			$("div#intro").fadeOut(500);
			$("div#overlay").fadeOut(500);
			$("div#logo").fadeIn(2000);

				//logo
				$("div#logo").css("display", "none")
				$("div#logo").delay(500).fadeIn(500)

				//bottom-nav
				var bottom_nav = $("div#bottom-nav").css("width") //167px
				$("div#bottom-nav").css({"width": "0px",})
				$("div#bottom-nav").delay(1000).transition({width: bottom_nav}, 700, "easeOutQuad")
				$("div#bottom-nav-links").css("display", "none")
				$("div#bottom-nav-links").delay(2000).fadeIn(500)
				$("div#language").css("display", "none")
				$("div#language").delay(2000).fadeIn(500)
				$("div#bottom-nav-footer").css("display", "none")
				$("div#bottom-nav-footer").delay(2000).fadeIn(500, function(){
					animating = false;
				})
		}
	});

	var fly_animating = false;
	function fly(top, left, text){
		fly_animating = true;
		$("span#fly").css({"top": top, "left": left}).text(text).fadeIn(500).delay(2000).fadeOut(500, function(){
			fly_animating = false;
		})
	}


function getFolderB(callback){
	var collection = globalCollection;
	if(logging){console.log("getFolder("+collection+", "+callback+")")}
	var folder = collection.toLowerCase();
	folder = folder.replace(/ /g, "-");
	var cacheCollection = folder.replace(/-/g, "");
	$("div#loading").fadeIn()
	if(!cache[cacheCollection].names){
		var imagesNames = JSON.parse(UrlExists(folder+"/NAMES.txt"))
		if(imagesNames){
			cache[cacheCollection].names = imagesNames;
		}
	}
	//EXTRA COLORS
	if(UrlExists(folder+"/COLORS.SHIRTS.txt") && UrlExists(folder+"/COLORS.HEX.txt")){
		cache[cacheCollection].colors = {}
		cache[cacheCollection].colors.shirts = JSON.parse(UrlExists(folder+"/COLORS.SHIRTS.txt"));
		cache[cacheCollection].colors.hex = JSON.parse(UrlExists(folder+"/COLORS.HEX.txt"));
		cache[cacheCollection].colors.unique = {}
		//Filter 1 letter
		$.each(cache[cacheCollection].colors.shirts, function(index, value){
			//console.log(index + " " + value)
			if(value.length == 1){
				cache[cacheCollection].colors.unique[value] = [value]
			}
			else if(value.length == 2){
				var unique = value.charAt(0);
				cache[cacheCollection].colors.unique[unique].push(value)
			}
			//console.log(cache[cacheCollection].colors.unique)
		})
	}
	//END OF EXTRA COLORS
	if(!cache[cacheCollection].images){ //doesn't exist in cache
		if(!cache[cacheCollection].colors){
			var imagesAll = [folder+"/A_big"+quality+".png", folder+"/B_big"+quality+".png", folder+"/C_big"+quality+".png", folder+"/D_big"+quality+".png", folder+"/E_big"+quality+".png", folder+"/F_big"+quality+".png"]
		}
		else {
			var imagesAll = cache[cacheCollection].colors.shirts.slice(0);
			$.each(imagesAll, function(index, value){
				imagesAll[index] = folder+"/"+value+"_big"+quality+".png";
			})
			//console.log(imagesAll)
		}
		//var newimages = []; Solution 1
		if(randomImages == true){
			imagesAll = shuffleArray(imagesAll);
		}
		var newimages = imagesAll.slice(0) //Solution 2
		$.imgpreload(imagesAll,{
			each: function(){
				// callback invoked when each image is loaded
				// this = dom image object
				if(!$(this).data('loaded')){ //Solution 1: Accept only loaded images. Solution 2: Delete from ordered array
					//var filename = $(this).attr("src").split('/').pop() //Only filename
					var filename = $(this).attr("src");

					//newimages[newimages.length] = filename; //Solution 1
					var tobeDeletedIndex = newimages.indexOf(filename)
					newimages.splice(tobeDeletedIndex, 1);
				}
				else { //Loaded, but eliminating extra colors
					var imagePath = $(this).attr("src");
					var filename = imagePath.split('/').pop()
					if(filename.charAt(1) != "_"){
						var tobeDeletedIndex = newimages.indexOf(imagePath)
						newimages.splice(tobeDeletedIndex, 1);
					}
				}
			},
			all: function(){
				$("div#loading").fadeOut()

				if(logging){console.log("	newimages: "+newimages)}
				images = newimages.slice(0);
				if(logging){console.log("	images: "+images)}
				/*
					caching
				*/
				cache[cacheCollection].images = newimages.slice(0);
				/*
					returning
				*/
				/*if(images.length){
					return images;
				}
				else {
					return false;
				}*/
				if(typeof(callback) == "function"){
					callback(collection);
				}
			}
		});
	}
	else {
		$("div#loading").fadeOut()
		images = cache[cacheCollection].images.slice(0)
		/*if(images.length){
			return images;
		}
		else {
			return false;
		}*/
		if(typeof(callback) == "function"){
			callback(collection);
		}
	}
}

	function Populate(callback){ //This function needs to be renamed, it just display invisible mid-circles and calculate positions
		animating = true;
		setTimeout(function(){ animating = false}, 3000);

		$("div#bottom-content").html('<div id="bottom-circles-container"><div class="social"></div><div class="social"></div><div class="social"></div><div class="social"></div><div class="mid-circle midmid-one"></div><div class="mid-circle midmid-two"></div><div class="mid-circle midmid-three"></div><div class="mid-circle midmid-four"></div><div class="mid-circle midmid-five"></div><div class="mid-circle midmid-six"></div><div id="colors"></div></div>');
					//circles
			//$("div#bottom-content").css("display", "none")
			//$("div#bottom-content").delay(2300).fadeIn(500)

		containerWidth = $("div#bottom-circles-container").width();
		containerHeight = $("div#bottom-circles-container").height();
		bigCircleSmallPosition.top = containerHeight/2 - smallCircleWidth/2;
		bigCircleSmallPosition.left = containerWidth - smallCircleWidth;

		//console.log("Executing: Populate - right before hide");
		$("#bottom-circles-container div.mid-circle").each(function(){
			//console.log("Executing: Populate - hiding mid-circles");
			var thisPosition = $(this).position();
			var midclassname = $(this).attr("class");
			var midclassnameonly = filterClass("midmid", midclassname);
			positions[midclassnameonly] = {top : thisPosition.top, left: thisPosition.left}
			$(this).css("display", "none");

			var smallPosition = {}
			var socialPosition = {}
			//Calculating top coords when small
			if(thisPosition.top > 0){
				smallPosition.top = containerHeight - smallCircleWidth;
				socialPosition.top = containerHeight - socialCircleWidth;
			}
			else {
				smallPosition.top = 0;
				socialPosition.top = 0;
			}

			if(thisPosition.left > 0){
				if(thisPosition.left < containerWidth/2){
					smallPosition.left = thisPosition.left + (midCircleWidth/2) - (smallCircleWidth/2);
					socialPosition.left = thisPosition.left + (midCircleWidth/2) - (socialCircleWidth/2);
				}
				else {
					smallPosition.left = containerWidth - smallCircleWidth;
					socialPosition.left = containerWidth - socialCircleWidth;
				}
			}
			else {
				smallPosition.left = 0;
				socialPosition.left = 0;
			}
			positions["small"+midclassnameonly] = {top: smallPosition.top, left: smallPosition.left}
			positions["social"+midclassnameonly] = {top: socialPosition.top, left: socialPosition.left}

		});

		var social = 0;
		$("#bottom-circles-container div.social").each(function(){
			var thisPosition = $(this).position();
			positions["social"+social] = {top : thisPosition.top, left: thisPosition.left}
			social++;

		});
		$("#bottom-circles-container div.social").each(function(){
			$(this).remove();
		});
		//console.log(positions)

		if(typeof(callback) == "function"){
			callback();
		}
	}

	function addPricetag(){
		/*var MIDDLE = (midCircleWidth/2) - (spanPrice/2);
		$("div.mid-circle").each(function(){
			$(this).prepend('<span class="pricetag">$20.00</span>')
		})
		$("span.pricetag").each(function(){
			$(this).css({left: midCircleWidth/2 - spanPrice/2})
		})*/
	}
	function deletePricetag(){
		$("span.pricetag").each(function(){
			$(this).remove();
		})
	}

	function displayCollection(){
		//console.log("displayCollection :"+images)
		$("div#bottom-content").children("div:first").fadeIn(500);
		var circles = 0;
		var max_circles = 6;
		$("#bottom-circles-container div.mid-circle").each(function(){
			circles++; //Just for timer

			if(images.length < max_circles){
				if(Math.random() < 0.5){
					if(images[0] !== undefined){
						$(this).append('<div><img src="'+images[0]+'" /></div>');
						images.splice(0, 1);
						$(this).delay(0+circles*500).fadeIn(500); //	.delay(starting delay + circle turn)
					}
				}
				max_circles--;
			}
			else {
				if(images[0] !== undefined){
					$(this).append('<div><img src="'+images[0]+'" /></div>');
					images.splice(0, 1);
					$(this).delay(0+circles*500).fadeIn(500); //	.delay(starting delay + circle turn)
				}
				max_circles--;
			}
		});
		addPricetag();
		$("div#upper-title a").delay(3000).fadeIn(500)
	}
	/*
				TRANSITION TO VIEWS
	*/
	$(document).on("mouseenter", "div#bottom-circles-container div.mid-circle", function() {
		$(this).children("span").fadeIn(250);
	});

	$(document).on("mouseleave", "div#bottom-circles-container div.mid-circle", function() {
		$(this).children("span").fadeOut(250);
	});

	$(document).delegate("div#bottom-circles-container div.mid-circle", "click", function(){
		if(animating == false && place == "containers"){
			deletePricetag();
			animating = true;
			var nonpressed = 1;

			var thisPressed = $(this);
			$(this).addClass("pressed");

			var eachCounterMax = $("div.mid-circle").has("img").length
			var eachCounter = 0;
			$("div.mid-circle:visible").has("img").each(function(){
				var thisPosition = $(this).position();

				if(thisPosition.top > 0){
					thisPosition.top = thisPosition.top + midCircleWidth - smallCircleWidth;
				}
				if(thisPosition.left > 0){
					if(thisPosition.left < containerWidth/2){
						thisPosition.left = thisPosition.left + (midCircleWidth/2) - (smallCircleWidth/2);
					}
					else {
						thisPosition.left = thisPosition.left + midCircleWidth - smallCircleWidth;
					}
				}
				$(this).children("div:first").children("img:first").transition({width: "136px", height: "136px"}, 500);
				$(this).transition({width: smallCircleWidth+"px", height: smallCircleWidth+"px", top: thisPosition.top+"px", left: thisPosition.left+"px"}, 500, function(){
					var smallPosition = $(this).position();
					var thisclassname = $(this).attr("class").split(" "); //	mid-circle mid-three pressed
					//positions["small"+thisclassname[1]] = {top: smallPosition.top, left: smallPosition.left}
					if($(this).hasClass("pressed")){
							$(this).transition({top: bigCircleSmallPosition.top+"px", left: bigCircleSmallPosition.left+"px"}, 500, function(){
								$(this).children("div:first").transition({width: "500px", height: "500px"}, 500);
								$(this).children("div:first").children("img:first").transition({width: "500px", height: "500px"}, 500);

								var bigCirclePositionLeft = containerWidth - bigCircleWidth;
								$(this).transition({width: bigCircleWidth+"px", height: bigCircleWidth+"px", top: "0px", left: bigCirclePositionLeft+"px"}, 500, function(){
									$(this).removeClass("mid-circle pressed").addClass("big-circle");
									$(this).zoom({ on:'grab', onZoomIn: function(){
										$("div.big-circle").transition({borderRadius: "0%"}, 500)
										if(cache.extraColors){$("div#colors").fadeToggle()}
										}, onZoomOut: function(){
											$("div.big-circle").transition({borderRadius: "50%"}, 500)
											if(cache.extraColors){$("div#colors").fadeToggle()}

											}

									});
									animating = false;
									place = "view";
									extraColors();
								});
							});
					}
					else {
							if(nonpressed == 1){
								$(this).transition({top: "0px", left: "0px"}, 500);
								nonpressed++;
							}
							else if(nonpressed == 2){
								$(this).transition({top: bigCircleSmallPosition.top+"px", left: "0px"}, 500);
								nonpressed++;
							}
							else if(nonpressed == 3){
								var bottom_left = containerHeight - smallCircleWidth;
								$(this).transition({top: bottom_left+"px", left: "0px"}, 500);
								nonpressed++;
							}
							else if(nonpressed == 4){
								var midleft = smallCircleWidth;
								var midtop = containerHeight/2 - smallCircleWidth - 20;
								$(this).transition({top: midtop+"px", left: midleft+"px"}, 500);
								nonpressed++;
							}
							else if(nonpressed == 5){
								var midleft = smallCircleWidth;
								var midtop = containerHeight/2 + 20;
								$(this).transition({top: midtop+"px", left: midleft+"px"}, 500);
								nonpressed++;
							}
							else {
								//Error?
							}
							//console.log($(this).has("img").attr("class"));
							$(this).removeClass("mid-circle").addClass("small-circle");

							/*eachCounter++
							if(eachCounter == eachCounterMax){
								animating = false;
							}*/
					}
				});
			});
		}
	});
	var once;
	function midToCollection(){
		var collection = globalCollection
			animating = true;

			//$("div#title a").fadeOut(500);
			var circles = {}
			circles.current = $("div.mid-circle:visible").has("img").length
			var eachCounter = 0;
			$("div#title a").stop().fadeOut(500);
			$("div.mid-circle:visible").has("img").each(function(){ //Disappear all images
				$(this).children("div:first").fadeOut(500, function(){
					eachCounter++
					if(eachCounter == circles.current){
						equalCircles(circles.current, collection);
					}
				})
			})

			function equalCircles(num, collection){
					var circles = {}
					var instances = new Array();
					circles.current = num
					//console.log(images.length + " : " + circles.current);
					if(images.length > circles.current){ //ADDING CIRCLES
						var difference = images.length - circles.current; //4 to 6, must add 2
						var available = new Array();
						$("div.mid-circle:hidden").each(function(){
							available[available.length] = filterClass("midmid", $(this).attr("class"))
						})
						available = shuffleArray(available);

						for(var i= 0; i<difference; i++){
							//console.log(available[i])
							$("div."+available[i]).fadeIn(500, function(){
								clearTimeout(once)
								once = setTimeout(function(){rePopulate(collection)}, 500)
							})
						}

					}
					else if(images.length < circles.current){ //REMOVING CIRCLES
						var difference = circles.current - images.length; //6 to 4, must remove 2
						var available = new Array();
						$("div.mid-circle:visible").each(function(){ //enter 6 times
							available[available.length] = filterClass("midmid", $(this).attr("class"))
						})
						available = shuffleArray(available);

						for(var i= 0; i<difference; i++){
							//console.log(available[i])
							$("div."+available[i]).fadeOut(500, function(){
								clearTimeout(once)
								once = setTimeout(function(){rePopulate(collection)}, 500)
							})
						}
					}
					else {
						//console.log("collection has same number of circles : " + collection)
						rePopulate(collection);
					}
			}

			function rePopulate(collection){
				clearTimeout(once)
				//console.log("repopulate")
				var circles = 0;
				var max_circles = images.length;
				if(randomImages == true){
					images = shuffleArray(images);
				}
				$("div.mid-circle:visible").each(function(){
					$(this).html("<div></div>")
					$(this).children("div:first").css("display", "none");
				});

				$("div.mid-circle:visible").each(function(){
					circles++; //Just for timer 1 2 3 4 5 6

					//console.log(images[0])
					if(images[0] !== undefined){
							$(this).children("div:first").html('<img src="'+images[0]+'" />');
							images.splice(0, 1);
							$(this).children("div:first").stop().delay(0+circles*500).fadeIn(500);
							}
					if(circles == max_circles){
						$("div#title a").stop().text(collection).delay(0+circles*600).fadeIn(500, function(){
							animating = false;
							place = "containers"
							addPricetag();
						});
					}

				});
			}


	}


	function makeSmalls(controlledrandom, callback){
		//This put them in a new random position
		deletePricetag();
		var shuffledSmalls = shuffleArray(midCircles);
		//var controlledrandom = true; //true: ABCD random, false: BDCA random
		if(controlledrandom == "true"){
			shuffledSmalls = midCircles.slice(0);
			var imagesCount = $("div#bottom-circles-container div:visible div").has("img").length
			var maxCuts = 6 - imagesCount;
			var controlCuts = 0;

			$.each(shuffledSmalls, function(index, className){
				if(Math.random() < 0.5 && controlCuts < maxCuts){
					shuffledSmalls.splice(index,1)
					controlCuts++;
				}
			});
		}

		if(animating == false){
			animating = true;
			var eachCounterMax = $("div.mid-circle").length
			var eachCounter = 0;
			$("div.mid-circle").each(function(){
					var thisPosition = $(this).position();

					if(thisPosition.top > 0){
						thisPosition.top = thisPosition.top + midCircleWidth - smallCircleWidth;
					}
					if(thisPosition.left > 0){
						if(thisPosition.left < containerWidth/2){
							thisPosition.left = thisPosition.left + (midCircleWidth/2) - (smallCircleWidth/2);
						}
						else {
							thisPosition.left = thisPosition.left + midCircleWidth - smallCircleWidth;
						}
					}
					$(this).children("div:first").transition({width: "136px", height: "136px"}, 500);
					$(this).children("div:first").children("img:first").transition({width: "136px", height: "136px"}, 500);
					$(this).transition({width: smallCircleWidth+"px", height: smallCircleWidth+"px", top: thisPosition.top+"px", left: thisPosition.left+"px"}, 500, function(){
						$(this).removeClass("mid-circle").addClass("small-circle");
							var thisclassname = filterClass("midmid", $(this).attr("class"));
							var newMidclass = shuffledSmalls[0].slice(0);
							shuffledSmalls.splice(0, 1);
							$(this).animate({top: positions["small"+newMidclass].top+"px", left: positions["small"+newMidclass].left+"px"}, 500, function(){
								$(this).children("div:first").animate({width: midCircleWidth+"px", height: midCircleWidth+"px"}, 500);
								$(this).children("div:first").children("img:first").animate({width: midCircleWidth+"px", height: midCircleWidth+"px"}, 500);

								//console.log("Animating " + thisclassname + " to top: " + positions[newMidclass].top+"px, left: " + positions[newMidclass].left+"px")
								$(this).animate({width: midCircleWidth+"px", height: midCircleWidth+"px", top: positions[newMidclass].top+"px", left: positions[newMidclass].left+"px"}, 500, function(){
									$(this).removeClass("small-circle").addClass("mid-circle");
									animating = false;
									place = "containers";

									eachCounter++
									if(eachCounter == eachCounterMax){ //Execute once
										var available = new Array();
										$("div.mid-circle:hidden").each(function(){
											available[available.length] = filterClass("midmid", $(this).attr("class"))
										})
										$.each(shuffledSmalls, function(index, value){
											$("div."+available[index]).transition({top: positions[value].top+"px", left: positions[value].left+"px"}, 500)
										})
										addPricetag();
									}
									if(callback && eachCounter == eachCounterMax){callback();}
								});

							});

					});
			});
		}
	}


	/*
				VIEWS CIRCLES
	*/
$(document).delegate("div#bottom-circles-container div.small-circle, div#bottom-circles-container div.big-circle", "click", function(){
		if(animating == false && !$(this).hasClass("big-circle")){		//STEP 1
			animating = true;
			var passThis = $(this);
			//$(passThis).transition({top: "500px", left: "500px"}, 500);
			var thisWidth = $(this).width();
			var thisPosition = $(this).position();
			var thisClass = $(this).attr('class');

			var bigCircleWidth = $("div.big-circle").width();
			var bigCircleHeight = $("div.big-circle").height();
			var bigCirclePosition = $("div.big-circle").position();
			var bigCircleSmallLeft = $("div.big-circle").parent().width() - thisWidth;

			var newTop = bigCircleWidth*0.5 - thisWidth/2;

			$("div.big-circle").trigger('zoom.destroy');
			$("div.big-circle").children("div:first").transition({width: "136px", height: "136px"}, 500);
			$("div.big-circle").children("div:first").children("img:first").transition({width: "136px", height: "136px"}, 500);
			$("div.big-circle").transition({width: thisWidth+"px", height: thisWidth+"px", top: newTop+"px", left: bigCircleSmallLeft+"px"}, 500, function(){		//STEP 2

				var middleR = $("div#bottom-circles-container").width()*0.5 + thisWidth/2;
				var middleL = $("div#bottom-circles-containerr").width()*0.5 - thisWidth/2;
				var bottom = bigCircleHeight - thisWidth;

				$(passThis).transition({top: bottom+"px", left: middleR+"px"}, 500);
				$("div.big-circle").transition({top: "0px", left: middleR+"px"}, 500, function(){		//STEP 3
					$("div.big-circle").transition({top: thisPosition.top+"px", left: thisPosition.left+"px"}, 500);

					$(passThis).transition({top: bigCircleSmallPosition.top+"px", left: bigCircleSmallPosition.left+"px"}, 500, function(){ 	//STEP 4
						$(passThis).children("div:first").children("img:first").transition({width: "500px", height: "500px"}, 500);

						$(passThis).children("div:first").removeAttributes();
						$(passThis).transition({width: bigCircleWidth+"px", height: bigCircleHeight+"px", top: bigCirclePosition.top+"px", left: bigCirclePosition.left+"px"}, 500, function(){		//STEP 5
							$("div.big-circle").removeClass("big-circle").addClass("small-circle");
							$(passThis).removeClass("small-circle").addClass("big-circle");
							$(passThis).zoom({ on:'grab', onZoomIn: function(){
								$("div.big-circle").transition({borderRadius: "0%"}, 500)
								if(cache.extraColors){$("div#colors").fadeToggle()}
								}, onZoomOut: function(){
									$("div.big-circle").transition({borderRadius: "50%"}, 500)
									if(cache.extraColors){$("div#colors").fadeToggle()}
								}
							});
							animating = false;
							extraColors();
						});
					});
				});
			});
		}
		//$("div.big-circle").transition({width: "109px", height: "109px", top: "145.5px"}, 500);
	});

	function extraColors(){
		console.log("extraColors")
		var cacheCollection = globalCollection.replace(/ /g, "").toLowerCase()
		console.log("	"+cache[cacheCollection].colors)
		if(cache[cacheCollection].colors !== undefined){
			console.log("	cache[cacheCollection].colors !== undefined")
			var imagePath = $("div.big-circle div img").attr("src")
			var filename = imagePath.split('/').pop()
			var unique = filename.charAt(0);

			if(filename.charAt(1) == "_"){
				var currentShirt = unique;
			}
			else {
				var currentShirt = filename.substring(0, 2);
			}

			if(cache[cacheCollection].colors.unique[unique].length > 1){
				console.log("	cache[cacheCollection].colors.unique[unique].length > 1")
				//Generate next color
				var currentShirtIndex = cache[cacheCollection].colors.unique[unique].indexOf(currentShirt)
					if(currentShirtIndex != cache[cacheCollection].colors.unique[unique].length-1){//Not the end
						var nextShirtIndex = currentShirtIndex + 1
					}
					else {
						var nextShirtIndex = 0
					}
				var nextShirt = cache[cacheCollection].colors.unique[unique][nextShirtIndex]
				var nextShirtHexIndex;
				$.each(cache[cacheCollection].colors.shirts, function(index, value){
					//console.log(nextShirt + " : " + value + " ("+index+")")
					if(value == nextShirt){
						nextShirtHexIndex = index;
						//console.log("found: "+index)
					}
				})
				var nextShirtHex = cache[cacheCollection].colors.hex[nextShirtHexIndex]
				//console.log(nextShirtHex)
				$("div#colors").css({backgroundColor: nextShirtHex})

				addHandlers("div#colors", "colors")
				$("div#colors").fadeIn()
				cache.extraColors = true;
			}
			else {
				console.log("	else")
				$("div#colors").fadeOut()
				cache.extraColors = false;
			}
		}
		else {
			cache.extraColors = false;
		}
	}

	function nextColor(){
		//console.log("nextColor")
		var imagePath = $("div.big-circle div img").attr("src")
		var nextShirtObject = nextColorObject(imagePath)

		$("div.big-circle").trigger('zoom.destroy');
		$("div.big-circle div img").fadeOut(250, function(){
			$("div.big-circle div img").attr("src", nextShirtObject.path)
			$("div.big-circle div img").fadeIn(250, function(){
				$("div.big-circle").zoom({ on:'grab', onZoomIn: function(){
					$("div.big-circle").transition({borderRadius: "0%"}, 500);
					if(cache.extraColors){$("div#colors").fadeToggle()}
					}, onZoomOut: function(){
						$("div.big-circle").transition({borderRadius: "50%"}, 500);
						if(cache.extraColors){$("div#colors").fadeToggle()}
					}
				});
			})
		})

		var nextShirtObject2 = nextColorObject(nextShirtObject.path)
		$("div#colors").css({backgroundColor: nextShirtObject2.hex})

	}

	function nextColorObject(imagePath){
		if(logging){console.log("nextColorObject("+imagePath+")")}
		//var cacheCollection = globalCollection.replace(/ /g, "").toLowerCase()
		//var folder = globalCollection.replace(/ /g, "-").toLowerCase()
		var folder = imagePath.split('/')
			folder = folder[0]
		var cacheCollection = folder.replace(/-/g, "").toLowerCase()

		var filename = imagePath.split('/').pop()
		var unique = filename.charAt(0);
		if(cache[cacheCollection].colors !== undefined && cache[cacheCollection].colors.unique[unique].length > 1){
			if(logging){console.log("	"+cache[cacheCollection].colors)}
			if(filename.charAt(1) == "_"){ //If second character of the filename is _, it must be a parent shirt
				var currentShirt = unique;
			}
			else {
				var currentShirt = filename.substring(0, 2);
			}

			var currentShirtIndex = cache[cacheCollection].colors.unique[unique].indexOf(currentShirt)
			if(currentShirtIndex != cache[cacheCollection].colors.unique[unique].length-1){//Not the end
				var nextShirtIndex = currentShirtIndex + 1
			}
			else {
				var nextShirtIndex = 0
			}
			var nextShirt = cache[cacheCollection].colors.unique[unique][nextShirtIndex]
			var nextShirtHexIndex;
			$.each(cache[cacheCollection].colors.shirts, function(index, value){
				//console.log(nextShirt + " : " + value + " ("+index+")")
				if(value == nextShirt){
					nextShirtHexIndex = index;
					//console.log("found: "+index)
				}
			})
			var nextShirtHex = cache[cacheCollection].colors.hex[nextShirtHexIndex]
			//console.log(nextShirtHex)

			var nextShirtObject = {}
				nextShirtObject.name = nextShirt;
				nextShirtObject.hex = nextShirtHex;
				nextShirtObject.path = folder+"/"+nextShirt+"_big"+quality+".png";

			return nextShirtObject;
		}
		else {
			return false;
		}
	}

	/*

			BACKTRACK

	*/
$("div#upper-title a").click(backTrack);

	function backTrack(callback){ //The callback is just passed to makeSmalls.
			if($("div#colors").is(":visible")){
				$("div#colors").fadeOut()
			}

		if(animating == false && place == "view"){
			animating = true;

			$("div.big-circle").trigger('zoom.destroy');
			$("div.big-circle").children("div:first").transition({width: "136px", height: "136px"}, 500);
			$("div.big-circle").children("div:first").children("img:first").transition({width: "136px", height: "136px"}, 500);
			$("div.big-circle").transition({width: smallCircleWidth+"px", height: smallCircleWidth+"px", top: bigCircleSmallPosition.top+"px", left: bigCircleSmallPosition.left+"px"}, 500, function(){
				$(this).removeClass("big-circle").addClass("small-circle");
				if(typeof(callback) == "function") {
					moveSmalls(false, false, callback);
				}
				else {
					moveSmalls(false, false, false);
				}


			});
		}
		else if(animating == false && place == "containers"){
			//console.log("Executing backtrack 2")
			if(typeof(callback) == "function"){
					makeSmalls(false, callback)
				}
				else {
					makeSmalls();
				}
		}

	}
	function moveSmalls(controlledrandom, originalpositions, callback){
			//This put them in a new random position
			var shuffledSmalls = shuffleArray(midCircles);
			//var controlledrandom = true; //true: ABCD random, false: BDCA random
			if(controlledrandom == true){
				console.log("controlledrandom false")
				shuffledSmalls = midCircles.slice(0);
				var imagesCount = $("div#bottom-circles-container div:visible div").has("img").length
				var maxCuts = 6 - imagesCount;
				var controlCuts = 0;

				$.each(shuffledSmalls, function(index, className){
					if(Math.random() < 0.5 && controlCuts < maxCuts){
						shuffledSmalls.splice(index,1)
						controlCuts++;
					}
				});
			}
			//console.log(shuffledSmalls)
			var eachCounterMax = $("div.small-circle").has("img").length
			var eachCounter = 0;
			$("div.small-circle").each(function(){
				var thisclassname = filterClass("midmid", $(this).attr("class"));
				var newMidclass = shuffledSmalls[0].slice(0);

				if(originalpositions == true){
					//console.log("originalpositions true")
					delete newMidclass;
					newMidclass = filterClass("midmid", $(this).attr("class"));

				}
				shuffledSmalls.splice(0, 1);
				$(this).animate({top: positions["small"+newMidclass].top+"px", left: positions["small"+newMidclass].left+"px"}, 500, function(){
					//console.log(filterClass("midmid", $(this).attr("class")) + " : " + newMidclass)
					$(this).children("div:first").animate({width: midCircleWidth+"px", height: midCircleWidth+"px"}, 500);
					$(this).children("div:first").children("img:first").animate({width: midCircleWidth+"px", height: midCircleWidth+"px"}, 500);

					$(this).animate({width: midCircleWidth+"px", height: midCircleWidth+"px", top: positions[newMidclass].top+"px", left: positions[newMidclass].left+"px"}, 500, function(){
						//console.log(filterClass("midmid", $(this).attr("class")) + " : " + newMidclass)
						$(this).removeClass("small-circle").addClass("mid-circle");
						animating = false;
						place = "containers";

						eachCounter++
						if(eachCounter == eachCounterMax){ //Execute once
							var available = new Array();
							$("div.mid-circle:hidden").each(function(){
								available[available.length] = filterClass("midmid", $(this).attr("class"))
							})
							$.each(shuffledSmalls, function(index, value){
								$("div."+available[index]).transition({top: positions[value].top+"px", left: positions[value].left+"px"}, 500)
							})
							addPricetag();
						}
						if(typeof(callback) == "function" && eachCounter == eachCounterMax){ animating=true; callback();}
					});

				});
			});

	}



	/*

					FOOTER LINKS

	*/
	//$("div#bottom-nav div#bottom-nav-footer a").click(function(){
//$(document).delegate("div#bottom-nav div#bottom-nav-footer a", "click", function(){ //TODO: footer links
$("div#bottom-nav div#bottom-nav-footer a").click(function(){
		if(animating == false){
			gotoSection($(this).text(), $(this).text(), false, place);
		}
	});

	//SEND EMAIL
	var avion_animating = false;
	$(document).delegate("img#send", "click", function(){
		//console.log("sending mail");
		//console.log($(document).width())
		//var thisPosition = $(this).position();
		//console.log(thisPosition)
		var avion = $(this);
		//console.log($("textarea, input").serialize())
		if($("textarea#message").val()){
			$.post("contact.php", $("textarea, input").serialize(), function(data, textStatus, jqsomething){
				//console.log(data) //Response text
				//console.log(textStatus)
				if(textStatus == "success"){
					$("textarea#message").transition({color: "#ffffff"}, 500, function(){
						$(this).val("").css({color: "#7A7A7A"});
						var pos = $(avion).position();
						$(avion).transition({rotate: "+=5deg"}).transition({top: "-202px", left: "+=675px"}, 1500, "ease", function(){
								$(avion).fadeOut(0).css({top: pos.top, left: pos.left}).fadeIn(500, function(){
									$(avion).transition({rotate: "-=5deg"}, 300, "ease");
								});
						}); //Trigonometria, cuz relative current position = top: 365 left: 598
						//Current: 45deg, top: -202, left: +=567
						//Airplane is 35px x 35px
					})
				}
			});
		}
		else {
			if(avion_animating == false){
				avion_animating = true;
				$(avion).transition({ rotate: "+=10deg"}, 100, "snap").transition({ rotate: "-=20deg"}, 100, "snap").transition({ rotate: "+=20deg"}, 100, "snap").transition({ rotate: "-=10deg"}, 100, "snap", function(){
					avion_animating = false;
				});
			}
		}
	});

	/*

					functions

	*/
	var footerlocations = {
			"SIZE": "TALLA",
			"FOLLOW" : "SEGUIR",
			"CONTACT" : "CONTACTO"
		}
	function gotoSection(section, title, callback, from){
	currentlocation = section; //this is obligatory, registers where we at, in the info section, for the translation function
	$.each(footerlocations, function(property, value){ //Checks between languages
		if(section == value){
			section = property;
			currentlocation = property;
		}
	});
	console.log("from: "+from+", currentlocation: "+currentlocation)
	//this function uses global sections array
		//console.log("Executing: gotoSection");
		$.each(sections, function(property, value){
				if(property == section){//Found section
					/*1*/if( $("div#upper-title a").text().length ){ //If a title already exists
							//console.log("yes title length")
							$("div#upper-title a").fadeOut(500, function(){
								if(property == "CONTAINERS"){
									place = "containers";
									$("div#upper-title a").removeClass().addClass("hover");
									$(this).text(title).delay(3500).fadeIn(500);
								}
								else {
									if(currentlocation == "FOLLOW" && from == "follow"){
										place = "follow";
										$("div#upper-title a").removeClass().addClass("nohover");
										$(this).fadeIn(500);
									}
									else if(currentlocation != "FOLLOW"){
										place = "info";
										$("div#upper-title a").removeClass().addClass("nohover");
										$(this).fadeIn(500);
									}
								}
							});
						}
						else {
							//console.log("no title length")
							if(property == "CONTAINERS"){
								place = "containers";
								$("div#upper-title a").removeClass().addClass("hover");
								$("div#upper-title a").fadeOut(0).text(title).delay(3500).fadeIn(500);
								}
							else {
								if(currentlocation != "FOLLOW"){
									place = "info";
								}
								$("div#upper-title a").removeClass().addClass("nohover");
								$("div#upper-title a").fadeOut(0).fadeIn(500);
							}
						}
					//console.log(index, value)
					/*2*/if( $("div#bottom-content").children("div:first").length ) { //If content already exists
							if(from == "containers" && currentlocation == "FOLLOW"){
								CollectionToFollow()
							}
							else if(from == "view" && currentlocation == "FOLLOW"){
								viewToFollow()
							}
							else {
								$("div#bottom-content").children("div:first").fadeOut(500, function(){ //$(this) gets destroyed in next line
									if(currentlocation == "FOLLOW"){ //Going to FOLLOW
										if(place == "info"){ //From INFO
											Populate(displayFollow);
										}
									}
									else {
										$("div#bottom-content").html(value);
										$("div#bottom-content").children("div:first").css("display", "none");
										//$("div#bottom-content").children("div:first").fadeIn(500);
									}
									checkLanguage(false, section); //Passive translation
									if(typeof(callback) == "function"){callback();}
									else{$("div#bottom-content").children("div:first").fadeIn(500);}
								});
							}
						}
						else { //Content doesnt exists
							$("div#bottom-content").html(value);
							checkLanguage(false, section); //Passive translation
							$("div#bottom-content").children("div:first").css("display", "none");
							if(typeof(callback) == "function"){callback();}
							else if(currentlocation == "FOLLOW"){
								Populate(displayFollow)
							}
							else{$("div#bottom-content").children("div:first").fadeIn(500);}
						}
				}
		});
	}

	function displayFollow(){
		var circles = 0;
		var max_circles = 4;

		$("div.mid-circle").each(function(){
			//$(this).removeClass("mid-circle").addClass("social")
			if(circles < max_circles){
				$(this).css({width: socialCircleWidth, height: socialCircleWidth, top: positions["social"+circles].top, left: positions["social"+circles].left});
				$(this).html('<div><a target="_blank" href="'+socialURLs[circles]+'"><img src="'+socialImages[circles]+'" /></a></div>');
				$(this).css({textAlign: "left"})
				$(this).children("div").children("a").children("img").css({width: socialCircleWidth, height: socialCircleWidth, bottom: "auto"})
				$(this).fadeIn(500);
			}
			circles++;
		})
		$("div#bottom-content").children("div:first").fadeIn(500);
		$("div#upper-title a").removeClass().addClass("nohover");
		$("div#upper-title a").stop().fadeIn(500)
		place = "follow"
	}
	function FollowToCollection(){
		animating = true;
		$("div#title a").fadeOut(500)
		$("div.mid-circle").each(function(){
			var thisMidClass = filterClass("midmid", $(this).attr("class"));
			$(this).children("div").fadeOut(500, function(){
				$(this).parent().transition({top: positions["social"+thisMidClass].top, left: positions["social"+thisMidClass].left}, 500, function(){
					$(this).transition({width: midCircleWidth, height: midCircleWidth, top: positions[thisMidClass].top, left: positions[thisMidClass].left}, 500, function(){
						clearTimeout(once)
						once = setTimeout(function(){InsurePositions()}, 500)
					})
				})
			});

		})

		function InsurePositions(){
			$("div.mid-circle").each(function(){
				var thisMidClass = filterClass("midmid", $(this).attr("class"));
				$(this).css({top: positions[thisMidClass].top, left: positions[thisMidClass].left})
			})
			midToCollection()
		}
	}
	function CollectionToFollow(){
		deletePricetag()
		animating = true;
		var eachCounter = 0;
		var max_circles = $("div.mid-circle:visible").length
		$("div.mid-circle:visible").each(function(){
			$(this).children("div").fadeOut(500, function(){
				eachCounter++
				if(eachCounter == max_circles){
					equalCirclesSocial()
				}
			})
		})
		//var shuffledMids = shuffleArray(MidCircles)


		function equalCirclesSocial(){
			var circles = {}
			circles.current = $("div.mid-circle:visible").length
				if(circles.current < 4){
					var available = new Array()
					$("div.mid-circle:hidden").each(function(){
						available[available.length] = filterClass("midmid", $(this).attr("class"))
					})
					var shuffled = shuffleArray(available)
					var difference = 4 - circles.current;
					for(var i=0; i<difference; i++){
						$("div."+shuffled[i]).fadeIn(500, function(){
							clearTimeout(once)
							once = setTimeout(function(){getSocialSmall()}, 500)
						})
					}

				}
				else if(circles.current > 4){
					var available = new Array()
					$("div.mid-circle:visible").each(function(){
						available[available.length] = filterClass("midmid", $(this).attr("class"))
					})
					var shuffled = shuffleArray(available)
					var difference = circles.current - 4;
					for(var i=0; i<difference; i++){
						$("div."+shuffled[i]).fadeOut(500, function(){
							clearTimeout(once)
							once = setTimeout(function(){getSocialSmall()}, 100)
						})
					}
				}
				else {
					getSocialSmall()
				}
		}

		function getSocialSmall(){
			$("div.mid-circle:visible").each(function(){
				var thisMidClass = filterClass("midmid", $(this).attr("class"))
				$(this).transition({width: socialCircleWidth, height: socialCircleWidth, top: positions["social"+thisMidClass].top, left: positions["social"+thisMidClass].left}, 500, function(){
					clearTimeout(once)
					once = setTimeout(function(){moveSocial()}, 100)
				})
			})
		}

		function moveSocial(){
			var circles = 0;
			var links = 0;
			$("div.mid-circle:visible").each(function(){
				$(this).children("div").css({width: socialCircleWidth, height: "auto"})
				$(this).transition({top: positions["social"+circles].top, left: positions["social"+circles].left}, 500, function(){
					$(this).children("div").html('<a target="_blank" href="'+socialURLs[links]+'"><img src="'+socialImages[links]+'" /></a>');
					$(this).css({textAlign: "left"})
					$(this).children("div").children("a").children("img").css({width: socialCircleWidth, height: socialCircleWidth, bottom: "auto"})
					$(this).children("div").delay(0+links*500).fadeIn(500, function(){
						clearTimeout(once)
						once = setTimeout(function(){socialEnding()}, 550)
					})
					links++
				})
				circles++
			})
		}

		function socialEnding(){
			animating = false;
			place = "follow"
			$("div#title a").removeClass().addClass("nohover")
			$("div#title a").text("FOLLOW")
			checkLanguage(false, "FOLLOW")
			$("div#title a").fadeIn(500)
		}

	}

	function viewToFollow(){
		console.log("Executing viewToFollow")
		animating = true;

		if($("div#colors").is(":visible")){
			$("div#colors").fadeOut()
		}

		$("div.small-circle").each(function(){
			$(this).removeClass("small-circle").addClass("mid-circle");
		})
		$("div.big-circle").removeClass("big-circle").addClass("mid-circle").trigger('zoom.destroy');
		var eachCounter = 0;
		var max_circles = $("div.mid-circle:visible").length
		$("div.mid-circle:visible").each(function(){
			$(this).children("div").fadeOut(500, function(){
				eachCounter++
				if(eachCounter == max_circles){
					equalCirclesSocial()
				}
			})
		})

			function equalCirclesSocial(){
				var circles = {}
				circles.current = $("div.mid-circle:visible").length
					if(circles.current < 4){
						var available = new Array()
						$("div.mid-circle:hidden").each(function(){
							available[available.length] = filterClass("midmid", $(this).attr("class"))
						})
						var shuffled = shuffleArray(available)
						var difference = 4 - circles.current;
						for(var i=0; i<difference; i++){
							$("div."+shuffled[i]).fadeIn(500, function(){
								clearTimeout(once)
								once = setTimeout(function(){getSocialSmall()}, 500)
							})
						}

					}
					else if(circles.current > 4){
						var available = new Array()
						$("div.mid-circle:visible").each(function(){
							available[available.length] = filterClass("midmid", $(this).attr("class"))
						})
						var shuffled = shuffleArray(available)
						var difference = circles.current - 4;
						for(var i=0; i<difference; i++){
							$("div."+shuffled[i]).fadeOut(500, function(){
								clearTimeout(once)
								once = setTimeout(function(){getSocialSmall()}, 100)
							})
						}
					}
					else {
						getSocialSmall()
					}
			}

			function getSocialSmall(){
					$("div.mid-circle:visible").each(function(){
						var thisPosition = $(this).position()
						var variation = ($(this).width() - socialCircleWidth)/2;
						$(this).transition({top: "+="+variation, left: "+="+variation, width: socialCircleWidth, height: socialCircleWidth}, 500, function(){
							clearTimeout(once)
							once = setTimeout(function(){moveSocial()}, 200)
						})
					})
			}

			function moveSocial(){
				var circles = 0;
				var links = 0;
				$("div.mid-circle:visible").each(function(){
					$(this).children("div").css({width: socialCircleWidth, height: "auto"})
					$(this).transition({top: positions["social"+circles].top, left: positions["social"+circles].left}, 500, function(){
						$(this).children("div").html('<a target="_blank" href="'+socialURLs[links]+'"><img src="'+socialImages[links]+'" /></a>');
						$(this).css({textAlign: "left"})
						$(this).children("div").children("a").children("img").css({width: socialCircleWidth, height: socialCircleWidth, bottom: "auto"})
						$(this).children("div").delay(0+links*500).fadeIn(500, function(){
							clearTimeout(once)
							once = setTimeout(function(){socialEnding()}, 550)
						})
						links++
					})
					circles++
				})
			}

		function socialEnding(){
			animating = false;
			place = "follow"
			$("div#title a").text("FOLLOW")
			checkLanguage(false, "FOLLOW")
			$("div#title a").fadeIn(500)
		}
	}


	var interchangeable = {}
		interchangeable.english = {
			"next" : "Español",
			"size" : "SIZE",
			"sizeurl" : "size-en.png",
			"follow" : "FOLLOW",
			"contact" : "CONTACT",
			"email" : "Your email  (optional)",
			"footer" : '<a>SIZE</a><br /><a>FOLLOW</a><br /><a>CONTACT</a><br /><br /><a id="Q">?</a>'
		}
		interchangeable.spanish = {
			"next" : "English",
			"size" : "TALLA",
			"sizeurl" : "size-es.png",
			"follow" : "SEGUIR",
			"contact" : "CONTACTO",
			"email" : "Su correo electrónico  (opcional)",
			"footer" : '<a>TALLA</a><br /><a>SEGUIR</a><br /><a>CONTACTO</a><br /><br /><a id="Q">?</a>'
		}


/*
	1. This function is invoked when the translate div is pressed, and translates the current page, the SET variable is true
	2. This function is invoked in the Populate() function, and SET is false, it makes the changes without animations
*/
$("div#language a").click(function(){
	checkLanguage($(this).text());
});

	function checkLanguage(set, location){ //This Function just sets texts
		var setlanguagelibrary;
		var translate = false;
		if(set){
			language = set;
		}

		if(language == "English"){
			setlanguagelibrary = interchangeable.english;
			$("div#translate a").text("Español");

		}
		else if (language == "Español"){
			setlanguagelibrary = interchangeable.spanish;
			$("div#translate a").text("English");
		}
		else {
			setlanguagelibrary = interchangeable.english;
			$("div#translate a").text("Español");
		}

		if(set){
			$("div#bottom-nav-footer").fadeOut(500, function(){
				$(this).html(setlanguagelibrary.footer).fadeIn(500, function(){
					$("div#bottom-nav div#bottom-nav-footer a").click(function(){
						if(animating == false){
							gotoSection($(this).text(), $(this).text(), false, place);
						}
					});
				});
			})
			$("div#language a").fadeOut(500, function(){
				$(this).text(setlanguagelibrary.next).fadeIn(500);
			})
		}

		if(currentlocation == "SIZE"){
				if(set){
					$("div#upper-title a").fadeOut(500, function(){
						$(this).text(setlanguagelibrary.size).fadeIn(500);
					})
					$("div#sizing").fadeOut(500, function(){
						$(this).css("background", "url("+setlanguagelibrary.sizeurl+") no-repeat center center").fadeIn(500);
					})
				}
				else {
					$("div#upper-title a").text(setlanguagelibrary.size)
					$("div#sizing").css("background", "url("+setlanguagelibrary.sizeurl+") no-repeat center center");
				}
		}
		else if(currentlocation == "FOLLOW"){
				if(set){
					$("div#upper-title a").fadeOut(500, function(){
						$(this).text(setlanguagelibrary.follow).fadeIn(500)
					})
				}
				else {
					$("div#upper-title a").text(setlanguagelibrary.follow)
				}
		}
		else if(currentlocation == "CONTACT"){
				if(set){
					$("div#upper-title a").fadeOut(500, function(){
						$(this).text(setlanguagelibrary.contact).fadeIn(500)
					})
					$("input#email").fadeOut(500, function(){
						$(this).attr("placeholder", setlanguagelibrary.email).fadeIn(500)
					})
				}
				else {
					$("div#upper-title a").text(setlanguagelibrary.contact)
					$("input#email").attr("placeholder", setlanguagelibrary.email)
				}
		}
	}



	/*

					jquery prototypes and functions

	*/
	function UrlExists(url){
		var http = new XMLHttpRequest();
		http.open('GET', url, false); //HEAD
		http.send();
		if(logging){console.log(http)}
		if(http.responseText.length < 600 && http.responseText.match(/404/) == "404"){ //579 is the actual one, 404 or Not Found
			return false;
		}
		else if(http.status == 200){
			return http.responseText;
		}
		else {
			return false;
		}
	}

	function filterClass(search, classString){
		var classArray = classString.split(" ");
		var returnClass;
		$.each(classArray, function(index, className){
			var compare = className.match(search);
			if( compare != null && compare.length ){
				returnClass = className;
			}
		})
		return returnClass;
	}

	function shuffleArray(array) {
		array = array.slice(0)
		for (var i = array.length - 1; i > 0; i--) {
			var j = Math.floor(Math.random() * (i + 1));
			var temp = array[i];
			array[i] = array[j];
			array[j] = temp;
		}
		return array;
	}


	jQuery.fn.removeAttributes = function() {
		return this.each(function() {
			var attributes = $.map(this.attributes, function(item) {
			  return item.name;
			});
			var img = $(this);
			$.each(attributes, function(i, item) {
				img.removeAttr(item);
			});
		});
	}
	/*
		This is the code graveyard
	*/
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-59099014-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
</body>
</html>
