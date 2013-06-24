		
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
		
			<a href="#" data-speed="1000" data-easing="easeInExpo">Anbulla Rajinikanth</a>
			<a href="#" data-speed="1000" data-easing="easeOutBack">Ethe Naasaval </a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">Gangvaa</a>
				<a href="#" data-speed="1000" data-easing="easeInExpo">John Jani Janardhan</a>
				<a href="#" data-speed="1000" data-easing="easeInExpo">Kai Kodukkum Kai</a>
				<a href="#" data-speed="1000" data-easing="easeInExpo">Meri Adalat</a>
				<a href="#" data-speed="1000" data-easing="easeInExpo">Nallavanuku Nallavan</a>
				
				<a href="#" data-speed="1000" data-easing="easeInExpo">Nan Mahaan Alla</a>
				<a href="#" data-speed="1000" data-easing="easeInExpo">Thambikku Entha Ooru</a>
		</div>
		<div id="mb_content_wrapper" class="mb_content_wrapper">
			<span class="mb_close"></span>
			
		
			<div class="mb_content">
				<h2>Anbulla Rajinikanth </h2>
				<div class="mb_content_inner">
					

<p>Language: Tamil </p>

<p>Director : Natraj </p>

<p>Music : Ilaiyaraaja </p>

<p>Cast : Ambika,Meena </p>

<p>Release date : 02.08.1984  </p>

<p>Wiki link :<a href="http://en.wikipedia.org/wiki/Anbulla_Rajinikanth"> http://en.wikipedia.org/wiki/Anbulla_Rajinikanth </a></p>
				</div>
			</div>
			<div class="mb_content">
				<h2>Ethe Naasaval </h2>
				<div class="mb_content_inner">
				

<p>
language: Telugu </p>
<p>
director : Puratshidasan </p>
<p>
music dir :Ilaiyaraaja </p>
<p>

cast :Revathi,Dharmendra </p>
<p>

release date :15.06.1984 </p>
<p>
wiki link : http://en.wikipedia.org/wiki/Kai_Kodukkum_Kai </p>
				</div>
			</div>
			<div class="mb_content">
				<h2>Gangvaa</h2>
				<div class="mb_content_inner">
					


<p>
language: Hindi
</p><p>
director : Rajasekhar
</p><p>
music dir :Bappi Lahiri
</p><p>
producer :Dwarakish
</p><p>

cast : Shabana Azmi,Suresh Oberoi

</p><p>
release date :14.09.1984 
</p><p>
wiki link : http://en.wikipedia.org/wiki/Gangvaa
</p>
				</div>
			</div>
		
		<div class="mb_content">
				<h2>John Jani Janardhan</h2>
				<div class="mb_content_inner">
					



<p>
language: Hindi </p>
<p>
direc: T. Rama Raor </p>
<p>
music dir Lakshmikant Pyarelal  </p>
<p>
producer :A.Rao </p>
<p>

cast :Poonam Dhillon, Rati Agnihotri </p>

<p>
release date :26.10.1984 </p>

				</div>
			</div>

			<div class="mb_content">
				<h2>Kai Kodukkum Kai</h2>
				<div class="mb_content_inner">
<p>
language: Tamil </p>
<p>
director : J. Mahendran </p>
<p>
music dir :Ilaiyaraaja </p>
<p>
producer :Vijayakumar, R.Vijayachandran </p>
<p>

cast :Revathi,Dharmendra </p>
<p>

release date :15.06.1984 </p>
<p>
wiki link : http://en.wikipedia.org/wiki/Kai_Kodukkum_Kai </p>

				</div>
			</div>
			
			<div class="mb_content">
				<h2>Meri Adalat</h2>
				<div class="mb_content_inner">
					
<p>
language: hindi </p>
<p>
director :A.T.Raghu </p>
<p>
music dir :Bappi Lahiri </p>
<p>
producer : U.S.N. Babu </p>
<p>
cast :Zeenat Aman,Sonia Sahni </p>
<p>

release date :	13.01.1984 </p>
<p>
wiki link : http://en.wikipedia.org/wiki/Meri_Adalat_

%281984_film%29 </p>
				</div>
			</div>

			
			
			
			<div class="mb_content">
				<h2>Nallavanuku Nallavan</h2>
				<div class="mb_content_inner">

<p>
language: Tamil </p>
<p>
director :S.P.Muthuraman </p>
<p>
music dir :Ilayaraja </p>
<p>
producer :M. Saravanan </p>
<p>

cast : Karthik,Raadhika Sarathkumar </p>
<p>

release date :22.010.1984 
</p>
				</div>
			</div>
			
				
			<div class="mb_content">
				<h2>Nan Mahaan Alla</h2>
				<div class="mb_content_inner">

<p>
language: Tamil</p>
<p>
director :S. P. Muthuraman</p>
<p>
music dir :Ilaiyaraaja</p>
<p>
producer :K. Balachandar</p>
<p>

cast :Radha ,Cho Ramaswamy,Sathyaraj</p>
<p>

release date :14.01.1984 </p>
<p>
wiki link : http://en.wikipedia.org/wiki/Naan_Mahaan_Alla_%281984_film%29</p>
				</div>
			</div>

			<div class="mb_content">
				<h2>Thambikku Entha Ooru</h2>
				<div class="mb_content_inner">

<p>language: Tamil</p>

director :Rajasekhar</p>
<p>
music dir :Ilaiyaraaja</p>
<p>
producer :Meena Panju,Arunachalam</p>
<p>

cast : Madhavi,Sulakshana</p>
<p>
release date :20.04.1984 </p>
<p>
wiki link : http://en.wikipedia.org/wiki/Thambikku_Entha_Ooru</p>
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
<?php include("footer.txt");?>
</div>


</div>
</body>



</html>
