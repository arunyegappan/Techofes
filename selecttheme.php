<?php

if(isset($_GET['path']))
{
$path=$_GET["path"];
}
else
{
$path="home.php";
}
?>
<html>


<head>

<title>Techofes'13-South inia's biggest culturals </title>
 <link rel="stylesheet" href="css/stylefrnt.css" type="text/css" media="screen"/>
 
         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script src="js/cufon-yui.js" type="text/javascript"></script>
		<script src="js/Liberation_Sans.font.js" type="text/javascript"></script>
		
		<script type="text/javascript">
			Cufon.replace('span');
			Cufon.replace('li');
			Cufon.replace('h1');
			Cufon.replace('p');
		</script>
<style>
body{

background-color:black;
				margin:0;
				padding:0;
				
			}
			span.reference{
				font-family:Arial;
				text-transform:uppercase;
				position:fixed;
				right:95px;
				bottom:10px;
				font-size:11px;
				text-shadow:1px 1px 1px #000;
			}
			span.reference a{
				color:#aaa;
				text-decoration:none;
				margin-right:20px;
			}
			span.reference a:hover{
				color:#ddd;
			}
			.title{
				position:absolute;
				right:10px;
				top:10px;
				width:91px;
				height:600px;
				background:transparent url(images/title.png) no-repeat top left;
			}
			
			@font-face
{
font-family: Freshman;
src: url('Freshman.ttf')
    
}

.logo
{
margin-left:500px;
}
#whole
{
width:1200px;
margin-left:auto;
margin-right:auto;
height:850;

}

.logo h1
{
position:relative;
left:-70px;
color:gainsboro;
}
		</style>

</head>

<body oncontextmenu="return false;" onkeydown="onKeyDown()" >
 
<div id="whole">

a
		<div id="cc_menu" class="cc_menu">
			<div class="cc_item" style="z-index:5;">
			<?php
echo '
<a href="process.php?str=third&path='.$path.'"><img src="images/halth.jpg" height="300" width="500" draggable="false"/></a> ';
?>

			<span class="cc_title">Halloween Theme</span>
				
			</div>
<div class="cc_item" >
				<?php
echo '
<a href="process.php?str=first&path='.$path.'"><img src="images/lite.jpg" height="300" width="500" draggable="false"/></a> ';
?>
<span class="cc_title">Lite Theme</span>
				
			</div>
			
			<div class="cc_item" style="z-index:3;">
				<?php
echo '
<a href="process.php?str=second&path='.$path.'"><img src="images/jeansth.jpg" height="300" width="500" draggable="false"/></a> ';
?>

<span class="cc_title">Jeans Theme</span>
				
			</div>
			<div class="cc_item" style="z-index:2;">
			<?php
echo '
<a href="process.php?str=fourth&path='.$path.'"><img src="images/girlsth.jpg" height="300" width="500" draggable="false"/></a> ';
?>
	<span class="cc_title">Alpha-F</span>
			
			</div>
		
		</div>
       
<script type="text/javascript">
            $(function() {
				//all the menu items
				var $items 		= $('#cc_menu .cc_item');
				//number of menu items
				var cnt_items	= $items.length;
				//if menu is expanded then folded is true
				var folded		= false;
				//timeout to trigger the mouseenter event on the menu items
				var menu_time;
				/**
				bind the mouseenter, mouseleave to each item:
				- shows / hides image and submenu
				bind the click event to the list elements (submenu):
				- hides all items except the clicked one, 
				and shows the content for that item
				*/
				$items.unbind('mouseenter')
					  .bind('mouseenter',m_enter)
				      .unbind('mouseleave')
					  .bind('mouseleave',m_leave)
					  .find('.cc_submenu > ul > li')
					  .bind('click',function(){
					var $li_e = $(this);
						  //if the menu is already folded,
						  //just replace the content
					if(folded){
						hideContent();
						showContent($li_e.attr('class'));
					}	
					      else //fold and show the content
						fold($li_e);
				});
				
				/**
				mouseenter function for the items
				the timeout is used to prevent this event 
				to trigger if the user moves the mouse with 
				a considerable speed through the menu items
				*/
				function m_enter(){
					var $this 	= $(this);
					clearTimeout(menu_time);
					menu_time 	= setTimeout(function(){
					//img
					$this.find('img').stop().animate({'top':'0px'},400);
					//cc_submenu ul
					$this.find('.cc_submenu > ul').stop().animate({'height':'200px'},400);
					},200);
				}
				
				//mouseleave function for the items
				function m_leave(){
					var $this = $(this);
					clearTimeout(menu_time);
					//img
					$this.find('img').stop().animate({'top':'-600px'},400);
					//cc_submenu ul
					$this.find('.cc_submenu > ul').stop().animate({'height':'0px'},400);
				}
				
				//back to menu button - unfolds the menu
				$('#cc_back').bind('click',unfold);
				
				/**
				hides all the menu items except the clicked one
				after that, the content is shown
				*/
				function fold($li_e){
					var $item		= $li_e.closest('.cc_item');
					
					var d = 100;
					var step = 0;
					$items.unbind('mouseenter mouseleave');
					$items.not($item).each(function(){
						var $item = $(this);
						$item.stop().animate({
							'marginLeft':'-140px'
						},d += 200,function(){
							++step;
							if(step == cnt_items-1){
								folded = true;
								showContent($li_e.attr('class'));
							}	
						});
					});
				}
				
				/**
				shows all the menu items 
				also hides any item's image / submenu 
				that might be displayed
				*/
				function unfold(){
					$('#cc_content').stop().animate({'left':'-700px'},600,function(){
						var d = 100;
						var step = 0;
					$items.each(function(){
							var $item = $(this);
							
							$item.find('img')
								 .stop()
								 .animate({'top':'-600px'},200)
								 .andSelf()
								 .find('.cc_submenu > ul')
								 .stop()
								 .animate({'height':'0px'},200);
								 
							$item.stop().animate({
							'marginLeft':'0px'
							},d += 200,function(){
								++step;
								if(step == cnt_items-1){
									folded = false;
									$items.unbind('mouseenter')
										  .bind('mouseenter',m_enter)
										  .unbind('mouseleave')
										  .bind('mouseleave',m_leave);
									
									hideContent();
								}		  
							});
						});
					});
				}
				
				//function to show the content
				function showContent(idx){
					$('#cc_content').stop().animate({'left':'140px'},200,function(){
						$(this).find('.'+idx).fadeIn();
					});
				}
				
				//function to hide the content
				function hideContent(){
					$('#cc_content').find('div').hide();
				}
            });
        </script>
</div>



</body>
</html>