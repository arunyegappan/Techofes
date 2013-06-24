<html>

<head>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/demo.css" />
     <link rel="stylesheet" type="text/css" href="css/style2.css" />
	 <link rel="stylesheet" type="text/css" href="stylesheets/inner.css" />
		<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>

		
		<?php include("slide.txt"); ?>
		<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36991865-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script>


function eventsajax(str)
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
    document.getElementById("eventsinner").innerHTML=xmlhttp.responseText;
    }

  }



xmlhttp.open("GET",str,true);
xmlhttp.send();




}


</script>

<style>
			span.reference{
				position:fixed;
				left:10px;
				bottom:10px;
				font-size:12px;
			}
			span.reference a{
				color:#aaa;
				text-transform:uppercase;
				text-decoration:none;
				text-shadow:1px 1px 1px #000;
				margin-right:30px;
			}
			span.reference a:hover{
				color:#ddd;
			}
			ul.sdt_menu{
				margin-top:150px;
			}
			h1.title{
				text-indent:-9000px;
				background:transparent url(title.png) no-repeat top left;
				width:633px;
				height:69px;
			}

</style>
</head>

<body id="page">
<ul class="cb-slideshow">
            <li><span>Image 01</span>
            <li><span>Image 02</span>
            <li><span>Image 03</span>
            <li><span>Image 04</span>
            <li><span>Image 05</span>
            <li><span>Image 06</span>
        </ul>
	<div class="wish">
		Happy birthday thalaiva-techofes
		</div>	
<div class="web">		
		
<div class="content">
<div class="menu">
<?php include("menu.txt") ?>
		</div>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
				/**
				* for each menu element, on mouseenter, 
				* we enlarge the image, and show both sdt_active span and 
				* sdt_wrap span. If the element has a sub menu (sdt_box),
				* then we slide it - if the element is the last one in the menu
				* we slide it to the left, otherwise to the right
				*/
                $('#sdt_menu > li').bind('mouseenter',function(){
					var $elem = $(this);
					$elem.find('img')
						 .stop(true)
						 .animate({
							'width':'170px',
							'height':'170px',
							'left':'0px'
						 },400,'easeOutBack')
						 .andSelf()
						 .find('.sdt_wrap')
					     .stop(true)
						 .animate({'top':'140px'},500,'easeOutBack')
						 .andSelf()
						 .find('.sdt_active')
					     .stop(true)
						 .animate({'height':'170px'},300,function(){
						var $sub_menu = $elem.find('.sdt_box');
						if($sub_menu.length){
							var left = '170px';
							if($elem.parent().children().length == $elem.index()+1)
								left = '-170px';
							$sub_menu.show().animate({'left':left},200);
						}	
					});
				}).bind('mouseleave',function(){
					var $elem = $(this);
					var $sub_menu = $elem.find('.sdt_box');
					if($sub_menu.length)
						$sub_menu.hide().css('left','0px');
					
					$elem.find('.sdt_active')
						 .stop(true)
						 .animate({'height':'0px'},300)
						 .andSelf().find('img')
						 .stop(true)
						 .animate({
							'width':'0px',
							'height':'0px',
							'left':'85px'},400)
						 .andSelf()
						 .find('.sdt_wrap')
						 .stop(true)
						 .animate({'top':'25px'},500);
				});
            });
        </script>
		</div>
	<div id="homepage">
		<p>Rajini, the real mantra of Tamil Nadu. Rajinikanth, the carpenter-turned-coolie-turned-conductor-turned Super Star says: "I couldn't have asked God for more."</p><br>
<p>The evergreen unique actor and the Superstar of Tamil industry, Rajinikanth was introduced by the renowned director, K.Balachandar in the movie Aboorva raagangal as a co-artist. It's been 25 years, believe it or not, since the Super Star made his debut with an inconsequential role in a Tamil film.</p>
<br>

<p>K Balachander, the director who has an uncanny knack of creating stars, first met Rajnikant at the film institute, where he was a student. Balachander glanced at the dark young man and crisply asked him to meet him in his office the next day. When Rajnikant walked into his office gingerly, Balachander informed him he was going to act in his next film. Overwhelmed by the sudden offer from a big director, Rajnikant just could not believe his ears. It's a feeling Rajni still recounts whenever in the mood of reminiscence.

Later, Balachander confided in his close friend and associate Ananthu, Watch out! There is a fire in the young man's eyes. One day he will take Tamil Nadu by storm. How true the prediction turned out!</p>

 
		</div>	
		<div class="side">
		<h2>FEW  EVERGREEN  DIALOGUES</h2>
		<div id="div_display"><script type="text/javascript" language="javascript">firstSlide();</script>
		</div>
		
		<div class="icons">
		<a href="http://www.facebook.com/techofes.org" target="_blank"><img src="images/face.png " width="40" height="40"></a>
		<a href="http://www.twitter.com/techofesceg" target="_blank"><img src="images/twitter.png " width="40" height="40"></a>
		<a href="http://www.techofesceg.tumblr.com" target="_blank"><img src="images/tumb.png " width="40" height="40" ></a>
		<a href="http://www.foursquare.com/techofesceg" target="_blank"><img src="images/four.png " width="40" height="40"></a>
		</div>
		<div class="like">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<iframe src="http://www.facebook.com/plugins/like.php?href=https://www.facebook.com/techofes.org"
        scrolling="no" frameborder="0"
        style="border:none; width:270px; height:150px"></iframe>
</div>

		</div>
</div>



 
<div class="footer">
<?php include("footer.txt");?>
</div>


</div>
</body>



</html>
