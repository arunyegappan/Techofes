		
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
		
			<a href="#" data-speed="1000" data-easing="easeInExpo">Aayiram jenmangal</a>
			<a href="#" data-speed="1000" data-easing="easeOutBack">Aval appadithan</a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">Bairavi</a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">En kelviku ena pathil</a>
			<a href="#" data-speed="1000" data-easing="easeOutBack">Ilamai oonjaladukirathu</a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">Iraivan kodutha varam</a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">Justice gopinath</a>
			<a href="#" data-speed="1000" data-easing="easeOutBack">Maathu tappadamaga</a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">Mangudi minor</a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">Mullum malarum</a>
			<a href="#" data-speed="1000" data-easing="easeOutBack">Priya</a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">Sadurangam</a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">Thai meethu sathiyam</a>
			<a href="#" data-speed="1000" data-easing="easeOutBack">Thappida thala</a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">Thappu thalangal</a>
			<a href="#" data-speed="1000" data-easing="easeOutBack">Vanakkatukuriya kadahliye</a>
			<a href="#" data-speed="1000" data-easing="easeInExpo">Vayasu pilichindi</a>
				
		</div>
		<div id="mb_content_wrapper" class="mb_content_wrapper">
			<span class="mb_close"></span>
			
		
			<div class="mb_content">
				<h2>Aaiyiram Jenmangal</h2>
				<div class="mb_content_inner">
					

<p>Language: Tamil</p>

<p>Director : Durai </p>

<p>Music : M.S.V </p>

<p>Cast : Rajinikanth , Vijayakumar , Latha </p>

<p>Release date : 10.3.1978</p>


				</div>
			</div>
			<div class="mb_content">
				<h2>Aval Apadithan</h2>
				<div class="mb_content_inner">
					

<p>Language: Tamil </p>

<p>Director : C.Rudhriah</p>

<p>Music : Ilaiyaraja</p>

<p>Cast : Rajinikanth , Sri Priya, Kamal Hasan , Saritha</p>

<p>Release date : 30.10.1978  </p>


				</div>
			</div>
			<div class="mb_content">
				<h2>Bairavi</h2>
				<div class="mb_content_inner">
					

<p>Language: Tamil </p>

<p>Director : M.Bhaskar</p>

<p>Music  : Ilaiyaraja</p>

<p>Cast : Rajinikanth , Sri Priya , Geetha , Sreekanth</p>

<p>Release date : 02.06.1978</p>

		
		</div>
			</div>
		
		<div class="mb_content">
				<h2>En kelviku ena pathil</h2>
				<div class="mb_content_inner">
					

<p>Language: Tamil</p>

<p>Director : P.Madhavan </p>

<p>Music : M.S.V </p>

<p>Cast : Rajinikanth , Vijayakumar , Latha </p>

<p>Release date : 09.12.1978</p>


				</div>
			</div>
			<div class="mb_content">
				<h2>Ilamai oonjaladugirathu</h2>
				<div class="mb_content_inner">
					

<p>Language: Tamil </p>

<p>Director : Sridhar</p>

<p>Music : Ilaiyaraja</p>

<p>Cast : Rajinikanth , Sri Priya, Kamal Hasan , Jayachitra</p>

<p>Release date : 09.06.1978  </p>


				</div>
			</div>
			<div class="mb_content">
				<h2>Iraivan Kodutha Varam</h2>
				<div class="mb_content_inner">
					

<p>Language: Tamil </p>

<p>Director : A,Bhimasingh</p>

<p>Music  : M.S.V</p>

<p>Cast : Rajinikanth , Sujatha , Vijayakumar</p>

<p>Release date : 22.09.1978</p>


				</div>
			</div>
		
		<div class="mb_content">
				<h2>Justice Gopinath</h2>
				<div class="mb_content_inner">
					

<p>Language: Tamil</p>

<p>Director : Yoganand </p>

<p>Music : K.S.Viswanathan </p>

<p>Cast : Rajinikanth , Sivaji Ganeshan , K.R.Vijaya , Aparna , Sumithra </p>

<p>Release date : 16.12.1978</p>


				</div>
			</div>
			<div class="mb_content">
				<h2>Maathu Tappadamaga</h2>
				<div class="mb_content_inner">
					

<p>Language: Kannada </p>

<p>Director : Pekati Sivaram</p>

<p>Music : Ilaiyaraja</p>

<p>Cast : Rajinikanth , Ananthnag , Sharada</p>

<p>Release date : 31.03.1978  </p>


				</div>
			</div>
			<div class="mb_content">
				<h2>Mangudi Minor</h2>
				<div class="mb_content_inner">
					

<p>Language: Tamil </p>

<p>Director :V.C.Gunanathan</p>

<p>Music : Chandrabose</p>

<p>Cast : Rajinikanth , Vijayakumar , Isarivelan , ISR</p>

<p>Release date : 02.06.1978</p>


				</div>
			</div>
		
		<div class="mb_content">
				<h2>Mullum Malarum</h2>
				<div class="mb_content_inner">
					

<p>Language: Tamil</p>

<p>Director : Mahendiran </p>

<p>Music : Ilaiyaraja</p>

<p>Cast : Rajinikanth , Shobha , Sarath Babu , Fatafat Jayalakshmi </p>

<p>Release date : 15.08.1978</p>


				</div>
			</div>
			<div class="mb_content">
				<h2>Priya</h2>
				<div class="mb_content_inner">
					

<p>Language: Tamil </p>

<p>Director : S.P.Muthuraman</p>

<p>Music : Ilaiyaraja</p>

<p>Cast : Rajinikanth , Sridevi, Ambarish , Singapore Asha , Major Sundarajan</p>

<p>Release date : 22.12.1978  </p>


				</div>
			</div>
			<div class="mb_content">
				<h2>Sadurangam</h2>
				<div class="mb_content_inner">
					

<p>Language: Tamil </p>

<p>Director : Durai</p>

<p>Music : V.Kumar</p>

<p>Cast : Rajinikanth , Sreekanth , JayaChitra , Prameel</p>

<p>Release date : 30.06.1978</p>


				</div>
			</div>
			
		<div class="mb_content">
				<h2>Thai Meethu Sathiyam </h2>
				<div class="mb_content_inner">
					

<p>Language: Tamil</p>

<p>Director : R.Thiyagarajan</p>

<p>Music : Sankar Ganesh </p>

<p>Cast : Rajinikanth , Mohanbabu </p>

<p>Release date : 30.10.1978</p>


				</div>
			</div>
			<div class="mb_content">
				<h2>Thappida Thala</h2>
				<div class="mb_content_inner">
					

<p>Language: Tamil</p>

<p>Director : K.Balachander</p>

<p>Music : Vijayabaskar</p>

<p>Cast : Rajinikanth , Saritha</p>

<p>Release date : 06.10.1978  </p>


				</div>
			</div>
			<div class="mb_content">
				<h2>Thappu thalangal</h2>
				<div class="mb_content_inner">
					

<p>Language: Tamil </p>

<p>Director : K.Balachander</p>

<p>Music dir : Vijayabaskar</p>

<p>Cast :Rajinikanth , Saritha</p>

<p>Release date : 02.06.1978</p>


				</div>
			</div>
		
			<div class="mb_content">
				<h2>Vanakkathukuriya Kadhaliye </h2>
				<div class="mb_content_inner">
					

<p>Language: Tamil</p>

<p>Director : Thirulokachander</p>

<p>Music : M.S.V</p>

<p>Cast : Rajinikanth , Sridevi , Vijayakumar , Jayachitra </p>

<p>Release date : 14.07.1978</p>


				</div>
			</div>
			<div class="mb_content">
				<h2>Vayasu Pilichindi</h2>
				<div class="mb_content_inner">
					

<p>Language: Telugu</p>

<p>Director : Sridhar</p>

<p>Music : Ilayaraja</p>

<p>Cast : Rajinikanth , Sripriya, Jayachitra , KamalHasan</p>

<p>Release date : 04.08.1978  </p>


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
<?php include("footer.txt"); ?>
</div>


</div>
</body>



</html>
