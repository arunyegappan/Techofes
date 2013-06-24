
<html>
<head>

</head>
<body>

<div id="fb-root"></div>
<script src="https://connect.facebook.net/en_US/all.js#appId=467915613245746&xfbml=1"></script>

<script>


  // Additional JS functions here
  window.fbAsyncInit = function() {
 
    FB.init({
      appId      : '467915613245746', // App ID
      
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true,  // parse XFBML
	  oauth: true
	
    });


	
	
	
    // Additional init code here
FB.getLoginStatus(function(response) {
 
  if (response.status === 'connected') {
  // connected
	location.href="selecttheme.php";

	
  } else if (response.status === 'not_authorized') {
    // not_authorized

	location.href="reg.php";
  } else {
    // not_logged_in

	location.href="reg.php";
  }
 });
  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
   
   
</script>
</body>
</html>

