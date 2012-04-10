  <html>
    <head>
      <title>My Facebook Login Page</title>
	   <script src="//connect.facebook.net/en_US/all.js"></script>
    </head>
    <body>
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '413042798722868',
            status     : true, 
            cookie     : true,
            xfbml      : true,
            oauth      : true,
          });
        };
        (function(d){
           var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
           js = d.createElement('script'); js.id = id; js.async = true;
           js.src = "//connect.facebook.net/en_US/all.js";
           d.getElementsByTagName('head')[0].appendChild(js);
         }(document));
      </script>
	  
	  <table >
	  <tr>
	  <td width="20%">
	  </td>
	   <td width="60%" align=center>
	  
	  </td>
	     <td width="20%">
		 <?
		 if(@$user==""){
	  //  echo "<div class='fb-login-button'>Login with Facebook</div>";
	  	echo "<a href='" .$loginurl ."' >login</a>";
		}
		else
		{
		echo " Welcome "  ;
		echo $user ."  ";
		echo "<a href='" .$logouturl ."' >logout</a>";
		}
		?>
	  </td>
	  </tr>
	  <tr>
	  <td>

	  </td>
	   <td>
	  
	   <? echo "<pre>" ;
	   print_r(@$user_profile);
	   ?>
	  </td>
	   <td>
	  </td>
	  </tr>
	    <tr>
	  <td>
	  </td>
	   <td>
	  </td>
	   <td>
	  </td>
	  </tr>
	  
	  </table>
     
    </body>
 </html>