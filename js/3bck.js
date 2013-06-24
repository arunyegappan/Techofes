function onKeyDown() {
  
  var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();
  if (event.ctrlKey && (pressedKey == "u" || 
                        pressedKey == "c")) {
    
    event.returnValue = false;
  }
  
   if(event.keyCode == 123)
  {
  event.returnValue = false;
  }
} 

$(function(){
	$("a[rel='cont']").click(function(e){
		
		if($(this).attr('id')!="techofes")
		{
	var x=$(this).attr('class');

	jQuery(".cona").attr("id","techofes");	
	jQuery(".conb").attr("id","techofes");
	jQuery(".conc").attr("id","techofes");
	jQuery(".cond").attr("id","techofes");
	jQuery(".cone").attr("id","techofes");
	jQuery(".conf").attr("id","techofes");	
	jQuery(".cong").attr("id","techofes");	
	jQuery(".conh").attr("id","techofes");	
	jQuery(".coni").attr("id","techofes");	
	jQuery(".conj").attr("id","techofes");	
	jQuery(".conk").attr("id","techofes");	
	
		
		pageurl = $(this).attr('href');
		
		
		 $("#cdetails").ajaxStart(function(){
    $(this).html("<p class='loadimg2'>Loading..</p> ");
  });
  
  $.ajax({url:pageurl,success: function(data){
			$("#cdetails").load(pageurl);
		}});
		
   $("#cdetails").ajaxStop(function(){
   
		 jQuery(".cona").attr("id","con");	
		jQuery(".conb").attr("id","con");
		jQuery(".conc").attr("id","con");
		jQuery(".cond").attr("id","con");
		jQuery(".cone").attr("id","con");
		jQuery(".conf").attr("id","con");	
		jQuery(".cong").attr("id","con");
		jQuery(".conh").attr("id","con");
		jQuery(".coni").attr("id","con");
		jQuery(".conj").attr("id","con");
		jQuery(".conk").attr("id","con");
		jQuery("."+x).attr("id","techofes");
  });
  
		
		return false; 
		 }
		  else
		 {
		 return false;
		 }
	});
});

$(function(){
	$("a[rel='con']").click(function(e){

	return false;
	});
	});



$(function(){
	$("a[rel='tab']").click(function(e){
		
		if($(this).attr('id')!="techofes")
		{
	var x=$(this).attr('class');

	jQuery(".linka").attr("id","techofes");	
	jQuery(".linkb").attr("id","techofes");
	jQuery(".linkc").attr("id","techofes");
	jQuery(".linkd").attr("id","techofes");
	jQuery(".linke").attr("id","techofes");
	jQuery(".linkf").attr("id","techofes");	
	jQuery(".linkg").attr("id","techofes");	
	jQuery(".icona").attr("id","techofes");
	jQuery(".iconb").attr("id","techofes");
	jQuery(".iconc").attr("id","techofes");
	jQuery(".icond").attr("id","techofes");
	jQuery(".icone").attr("id","techofes");
	jQuery(".iconf").attr("id","techofes");
	jQuery(".icong").attr("id","techofes");
	jQuery(".iconh").attr("id","techofes");
	jQuery(".iconi").attr("id","techofes");
	jQuery(".iconj").attr("id","techofes");
	jQuery(".iconk").attr("id","techofes");
	jQuery(".iconl").attr("id","techofes");
	jQuery(".foota").attr("id","techofes");
	jQuery(".footb").attr("id","techofes");
	jQuery(".footc").attr("id","techofes");
		
		pageurl = $(this).attr('href');
		
		
		 $("#homepage").ajaxStart(function(){
    $(this).html("<p class='loadimg'>Loading..</p> ");
  });
  
  $.ajax({url:pageurl,success: function(data){
			$("#homepage").load(pageurl+"/?click='yes'");
		}});
		
   $("#homepage").ajaxStop(function(){
   
		 jQuery(".linka").attr("id","arun");	
		jQuery(".linkb").attr("id","arun");
		jQuery(".linkc").attr("id","arun");
		jQuery(".linkd").attr("id","arun");
		jQuery(".linke").attr("id","arun");
		jQuery(".linkf").attr("id","arun");	
		jQuery(".linkg").attr("id","arun");	
		jQuery(".icona").attr("id","saas");
		jQuery(".iconb").attr("id","saas");
		jQuery(".iconc").attr("id","saas");
		jQuery(".icond").attr("id","saas");
		jQuery(".icone").attr("id","saas");
		jQuery(".iconf").attr("id","saas");
		jQuery(".icong").attr("id","saas");
		jQuery(".iconh").attr("id","saas");
		jQuery(".iconi").attr("id","saas");
		jQuery(".iconj").attr("id","saas");
		jQuery(".iconk").attr("id","saas");
		jQuery(".iconl").attr("id","saas");
		jQuery(".foota").attr("id","arun");
		jQuery(".footb").attr("id","arun");
		jQuery(".footc").attr("id","arun");
		jQuery("."+x).attr("id","techofes");
  });
  
 
		
		
		
		
		if(pageurl!=window.location){
			window.history.pushState({path:pageurl},'',pageurl);	
		}
		
		
		return false; 
		 }
		 else
		 {
		 return false;
		 }
	});
});



$(function(){
	$("a[rel='eve']").click(function(e){
		
		if($(this).attr('id')!="techofes")
		{
	var x=$(this).attr('class');

	jQuery(".evea").attr("id","techofes");	
	jQuery(".eveb").attr("id","techofes");
	jQuery(".evec").attr("id","techofes");
	jQuery(".eved").attr("id","techofes");
	jQuery(".evee").attr("id","techofes");
	jQuery(".evef").attr("id","techofes");	
	jQuery(".eveg").attr("id","techofes");
	jQuery(".eveh").attr("id","techofes");
		
		pageurl = $(this).attr('href');
		
		
		 $("#t_eventdetails").ajaxStart(function(){
    $(this).html("<p class='loadimg2'>Loading..</p> ");
  });
  
  $.ajax({url:pageurl,success: function(data){
			$("#t_eventdetails").load(pageurl+"/?click='yes'");
		}});
		
   $("#t_eventdetails").ajaxStop(function(){
   
		 jQuery(".evea").attr("id","eve");	
		jQuery(".eveb").attr("id","eve");
		jQuery(".evec").attr("id","eve");
		jQuery(".eved").attr("id","eve");
		jQuery(".evee").attr("id","eve");
		jQuery(".evef").attr("id","eve");	
		jQuery(".eveg").attr("id","eve");
		jQuery(".eveh").attr("id","eve");
		jQuery("."+x).attr("id","techofes");
  });
  
 
		
		
		

		if(pageurl!=window.location){
			window.history.pushState({path:pageurl},'',pageurl);	
		}
		
		
		return false; 
		 }
		  else
		 {
		 return false;
		 }
	});
});




$(function(){
	$("a[rel='det']").click(function(e){
		
		if($(this).attr('id')!="techofes")
		{
	var x=$(this).attr('class');

	jQuery(".deta").attr("id","techofes");	
	jQuery(".detb").attr("id","techofes");
	jQuery(".detc").attr("id","techofes");
	jQuery(".detd").attr("id","techofes");
	jQuery(".dete").attr("id","techofes");
	jQuery(".detf").attr("id","techofes");
	jQuery(".detg").attr("id","techofes");
	
		
		pageurl = $(this).attr('href');
		
		
		 $("#t_edetails").ajaxStart(function(){
    $(this).html("<p class='loadimg3'>Loading..</p> ");
  });
  
  $.ajax({url:pageurl,success: function(data){
			$("#t_edetails").load(pageurl);
		}});
		
   $("#t_edetails").ajaxStop(function(){
   
		 jQuery(".deta").attr("id","det");	
		jQuery(".detb").attr("id","det");
		 jQuery(".detc").attr("id","det");	
		jQuery(".detd").attr("id","det");
		 jQuery(".dete").attr("id","det");	
		jQuery(".detf").attr("id","det");
		 jQuery(".detg").attr("id","det");	
		
		
		
		jQuery("."+x).attr("id","techofes");
  });
  
 
		
		
		
		
		
		return false; 
		 }
		  else
		 {
		 return false;
		 }
	});
});



	
$(function(){
	$("a[rel='spo']").click(function(e){
		
		if($(this).attr('id')!="techofes")
		{
	var x=$(this).attr('class');

	jQuery(".spoa").attr("id","techofes");	
	jQuery(".spob").attr("id","techofes");
	
	
		
		pageurl = $(this).attr('href');
		
		
		 $("#t_spons").ajaxStart(function(){
    $(this).html("<p class='loadimg2'>Loading..</p> ");
  });
  
  $.ajax({url:pageurl,success: function(data){
			$("#t_spons").load(pageurl);
		}});
		
   $("#t_spons").ajaxStop(function(){
   
		 jQuery(".spoa").attr("id","spon");	
		jQuery(".spob").attr("id","spon");
		
		jQuery("."+x).attr("id","techofes");
  });
  
 
	
		return false; 
		 }
		  else
		 {
		 return false;
		 }
	});
});

