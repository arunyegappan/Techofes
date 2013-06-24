		
		<html>

<head>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<link rel="stylesheet" type="text/css" href="css/demo.css" />
     <link rel="stylesheet" type="text/css" href="css/style2.css" />
	 <link rel="stylesheet" type="text/css" href="stylesheets/inner.css" />
		<script type="text/javascript" src="js/modernizr.custom.86080.js"></script>
<link rel="stylesheet" type="text/css" href="css/stylem.css" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Astloch:regular,bold' rel='stylesheet' type='text/css' />
		<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
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
		
	<div id="eventsinner">
	<div class="info">
	CLICK ON THE FILM NAMES TO GET THE DETAILS
	</div>
		<div id="mb_pattern" class="mb_pattern"></div>
		
		<div id="mb_menu" class="mb_menu">
		
			<a href="#" data-speed="1000" data-easing="easeInExpo">Agni Sakshi</a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">Engeyo keta kural</a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">Moondru Mugam</a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">Nandri meendum varuga</a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">Pokkiri raja</a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">Pudhu kavithai</a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">Ranga</a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">Thanikkatu Raja</a>
			
			</div>
		<div id="mb_content_wrapper" class="mb_content_wrapper">
			<span class="mb_close"></span>
			
		
			<div class="mb_content">
				<h2>Agni sakshi</h2>
				<div class="mb_content_inner">
	<p>
LANGUAGE:Tamil</p>
<p>
DIRECTOR:K.Balachander</p>
<p>
MUSIC DIRECTOR:Ilayaraja</p>
<p>
CAST:Sivakumar,Saritha</p>
<p>
DETAILS:Rajnikanth,Kamal Hasan both played cameo in this film</p>
<p>
RELEASE DATE:1982</p>    
<p>
WIKIPEDIA LINK:http://en.wikipedia.org/wiki/Agni_Sakshi_(1982_film)</p>						


				</div>
			</div>
			<div class="mb_content">
				<h2>Engeyo keta kural</h2>
				<div class="mb_content_inner">
<p>
LANGUAGE:Tamil</p>
<p>
DIRECTOR:SP.Muthuraman</p>
<p>
PRODUCER:Meena,Panchu Arunachalam</p>
<p>
MUSIC DIRECTOR:Ilayaraja</p>
<p>
CAST:Rajnikanth,Ambika,Radha,Delhi Ganesh</p>
<p>
RELEASE DATE:14-08-1982</p>
<p>
WIKIPEDIA LINK:http://en.wikipedia.org/wiki/Enkeyo_Ketta_Kural</p>

				</div>
			</div>
			<div class="mb_content">
				<h2>Moondru Mugam</h2>
				<div class="mb_content_inner">
<p>
LANGUAGE:Tamil</p>
<p>
DIRECTOR:A.Jagannathan</p>
<p>
PRODUCER:Thamizhazhagan,G.Thayagarajan</p>
<p>
MUSIC DIRECTOR:Sankar Ganesh</p>
<p>
CAST:Rajnikanth,Radhika,Sathyaraj,Delhi Ganesh,Silk Smitha</p>
<p>
AWARDS:This film received the Best actor (for Rajinikanth) in 1982 from the Tamil Nadu Government.</p>
<p>
RELEASE DATE:01-10-1982    </p>
<p>
WIKIPEDIA LINK:http://en.wikipedia.org/wiki/Moondru_Mugam</p>					


				</div>
			</div>
		
		
			<div class="mb_content">
				<h2>Nandri Meendum Varuga</h2>
				<div class="mb_content_inner">
<p>
LANGUAGE:Tamil</p>
<p>
DIRECTOR:Mouli</p>
<p>
PRODUCER:Mouli</p>
<p>
MUSIC DIRECTOR:Ilayaraja</p>
<p>
CAST:Prathap K.Pothan,Suhasini.JaiShankar</p>
<p>
DETAILS:Rajnikanth,Thengai Srinivasan,Silk Smitha played  cameo</p>
<p>
RELEASE DATE:09-07-1982    </p>
<p>
WIKIPEDIA LINK:http://en.wikipedia.org/wiki/Naandri,_Meendum_Varuga</p>					


				</div>
			</div>
			
			<div class="mb_content">
				<h2>Pokkiri raja</h2>
				<div class="mb_content_inner">
					
<p>
LANGUAGE:Tamil</p>
<p>
DIRECTOR:SP.Muthuraman</p>
<p>
MUSIC DIRECTOR:M.S.Viswanathan </p>
<p>
PRODUCER:AVM productions</p>
<p>
CAST:Rajnikanth,Sridevi,Radhika Sarathkumar</p>
<p>
DETAILS:Remake of kannada film Antha</p>
<p>
RELEASE DATE:14.01.1982    </p>
<p>
WIKIPEDIA LINK:http://en.wikipedia.org/wiki/Pokkiri_Raja_(1982_film)</p>
				</div>
			</div>
			
			<div class="mb_content">
				<h2>Pudhukavithai</h2>
				<div class="mb_content_inner">
	<p>
LANGUAGE:Tamil</p>
<p>
DIRECTOR:SP.Muthuraman</p>
<p>
PRODUCER:Rajam Balachander</p>
<p>
MUSIC DIRECTOR:Ilayaraja</p>
<p>
CAST:Rajnikanth,Jyothi.Sukumari,Saritha</p>
<p>
DETAILS:Remake of kannada film Naa ninna mareyalaare</p>
<p>
RELEASE DATE:11-06-1982    </p>
<p>
WIKIPEDIA LINK:http://en.wikipedia.org/wiki/Puthukavithai</p>				
				</div>
			</div>
			
			<div class="mb_content">
				<h2>Ranga</h2>
				<div class="mb_content_inner">
	<p>
LANGUAGE:Tamil</p>
<p>
DIRECTOR:R.Thiyagarajan</p>
<p>
MUSIC DIRECTOR:Shankar Ganesh</p>
<p>
PRODUCER:C.Dhandayudapani</p>
<p>
CAST:Rajnikanth,Radhika,Smitha,Raveendar,K.R.Vijaya.</p>
<p>
RELEASE DATE:14.04.1982    </p>
<p>
WIKIPEDIA LINK:http://en.wikipedia.org/wiki/Ranga_(film)</p>			
				</div>
			</div>
			
			<div class="mb_content">
				<h2>Thanikaatu raja</h2>
				<div class="mb_content_inner">
		<p>
LANGUAGE:Tamil</p>
<p>
DIRECTOR:V.C.Gohanathan</p>
<p>
MUSIC DIRECTOR:Ilayaraja</p>
<p>
PRODUCER:D,ramanaidu</p>
<p>
CAST:Rajnikanth,Sridevi,Sripriya</p>
<p>
RELEASE DATE:	12.03.1982    </p>
<p>
WIKIPEDIA LINK:http://en.wikipedia.org/wiki/Thanikattu_Raja</p>	
				</div>
			</div>
		</div>
		</div>



<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
		<!-- the mousewheel plugin - optional to provide mousewheel support -->
		<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
		<!-- the jScrollPane script -->
		<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" src="js/jquery.transform-0.9.3.min_.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.11/jquery-ui.min.js"></script>
		<script type="text/javascript">
			$(function() {
				var $menu			= $('#mb_menu'),
				$menuItems			= $menu.children('a'),
				$mbWrapper			= $('#mb_content_wrapper'),
				$mbClose			= $mbWrapper.children('.mb_close'),
				$mbContentItems		= $mbWrapper.children('.mb_content'),
				$mbContentInnerItems= $mbContentItems.children('.mb_content_inner');
				$mbPattern			= $('#mb_pattern'),
				$works				= $('#mb_imagelist > li'),
				$mb_bgimage			= $('#mb_background > img'),
				
				Menu		 		= (function(){
					
					var init		= function() {
						preloadImages();
						initPlugins();
						initPattern();
						initEventsHandler();
					},
					//preloads the images for the work area (data-bgimg attr)
					preloadImages	= function() {
						$works.each(function(i) {
							$('<img/>').attr('src' , $(this).children('img').data('bgimg'));
						});
					},
					//initialise the jScollPane (scroll plugin)
					initPlugins		= function() {
						$mbContentInnerItems.jScrollPane({
							verticalDragMinHeight: 40,
							verticalDragMaxHeight: 40
						});
					},
					/*
						draws 16 boxes on a specific area of the page.
						we randomly calculate the top, left, and rotation angle for each one of them
					 */
					initPattern		= function() {
						for(var i = 0; i < 16 ; ++i) {
							//random opacity, top, left and angle
							var o		= 0.1,
							t		= Math.floor(Math.random()*300) + 250, // between 5 and 200
							l		= Math.floor(Math.random()*1096) + 5, // between 5 and 700
							a		= Math.floor(Math.random()*101) - 50; // between -50 and 50
									
							$el		= $('<div>').css({
								opacity			: o,
								top				: t + 'px',
								left			: l + 'px'
							});
								
							if (!$.browser.msie)
								$el.transform({'rotate'	: a + 'deg'});
								
							$el.appendTo($mbPattern);
						}
						$mbPattern.children().draggable(); //just for fun
					},
					/*
						when the User closes a content item, we move the boxes back to the original place,
						with new random values for top, left and angle though
					 */
					disperse 		= function() {
						$mbPattern.children().each(function(i) {
							//random opacity, top, left and angle
							var o			= 0.1,
							t			= Math.floor(Math.random()*300) + 250, // between 5 and 200
							l			= Math.floor(Math.random()*1096) + 5, // between 5 and 700
							a			= Math.floor(Math.random()*101) - 50; // between -50 and 50
							$el			= $(this),
							param		= {
								width	: '50px',
								height	: '50px',
								opacity	: o,
								top		: t + 'px',
								left	: l + 'px'
							};
									
							if (!$.browser.msie)
								param.rotate	= a + 'deg';
									
							$el.animate(param, 1000, 'easeOutExpo');
						});
					},
					initEventsHandler	= function() {
						/*
							click a link in the menu
						 */
						$menuItems.bind('click', function(e) {
							var $this	= $(this),
							pos		= $this.index(),
							speed	= $this.data('speed'),
							easing	= $this.data('easing');
							//if an item is not yet shown
							if(!$menu.data('open')){
								//if current animating return
								if($menu.data('moving')) return false;
								$menu.data('moving', true);
								$.when(openItem(pos, speed, easing)).done(function(){
									$menu.data({
										open	: true,
										moving	: false
									});
									showContentItem(pos);
									$mbPattern.children().fadeOut(500);
								});
							}
							else
								showContentItem(pos);
							return false;
						});
							
						/*
							click close makes the boxes animate to the top of the page
						 */
						$mbClose.bind('click', function(e) {
							$menu.data('open', false);
							/*
								if we would want to show the default image when we close:
								changeBGImage('images/default.jpg');
							 */
							$mbPattern.children().fadeIn(500, function() {
								$mbContentItems.hide();
								$mbWrapper.hide();
							});
								
							disperse();
							return false;
						});
							
						/*
							click an image from "Works" content item,
							displays the image on the background
						 */
						$works.bind('click', function(e) {
							var source	= $(this).children('img').data('bgimg');
							changeBGImage(source);
							return false;
						});
								
					},
					/*
						changes the background image
					 */
					changeBGImage		= function(img) {
						//if its the current one return
						if($mb_bgimage.attr('src') === img || $mb_bgimage.siblings('img').length > 0)
							return false;
									
						var $itemImage = $('<img src="'+img+'" alt="Background" class="mb_bgimage" style="display:none;"/>');
						$itemImage.insertBefore($mb_bgimage);
							
						$mb_bgimage.fadeOut(1000, function() {
							$(this).remove();
							$mb_bgimage = $itemImage;
						});
						$itemImage.fadeIn(1000);
					},
					/*
						This shows a content item when there is already one shown:
					 */
					showContentItem		= function(pos) {
						$mbContentItems.hide();
						$mbWrapper.show();
						$mbContentItems.eq(pos).show().children('.mb_content_inner').jScrollPane();
					},
					/*
						moves the boxes from the top to the center of the page,
						and shows the respective content item
					 */
					openItem			= function(pos, speed, easing) {
						return $.Deferred(
						function(dfd) {
							$mbPattern.children().each(function(i) {
								var $el			= $(this),
								param		= {
									width	: '100px',
									height	: '100px',
									top		: 250 + 100 * Math.floor(i/4),
									left	: 300 + 100 * (i%4),
									opacity	: 1
								};
										
								if (!$.browser.msie)
									param.rotate	= '0deg';
										
								$el.animate(param, speed, easing, dfd.resolve);
							});
						}
					).promise();
					};
						
					return {
						init : init
					};
					
				})();
			
				/*
					call the init method of Menu
				 */
				Menu.init();
			});
		</script>
		</div>	
		
</div>


</div>

		
<div class="footer">
<div class="info">
	<?php include("footer.txt"); ?>
	</div>
</div>


</div>
</body>



</html>
