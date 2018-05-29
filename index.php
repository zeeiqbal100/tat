<?php
	//session_start();
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" class="no-js ie6 oldie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" class="no-js ie7 oldie" dir="ltr" lang="en-US">
<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" class="no-js ie8 oldie" dir="ltr" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html class="no-js" dir="ltr" lang="en-US">
<!--<![endif]-->

<head>
	<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/helvetica-neue-medium_500.font.js" type="text/javascript"></script>
	<script type="text/javascript">
			Cufon.replace('h1'); // Works without a selector engine
	</script>
	<link rel="stylesheet" type="text/css" href="login-css/login-styles.css" />
	<link rel="stylesheet" type="text/css" href="login-css/styles.css" />
	<title>McKinsey &amp; Company</title>
</head>

<body>
<!-- <div class="header">
  	<div class="inner">
		<img src="imgs/logo.png" alt="McKinsey &amp; Company"/>
	
        <h1>PAGE TITLE</h1>
	</div>
</div>
 -->

<div class="login-form">
	<!-- UPDATE the array to your USERNAME AND PASSWORD-->
	<?php

		$credentials = array ("tatasteel", "mckinsey#");

		$random1 = 'secret_key1';
		$random2 = 'secret_key2';

		$hash = md5($random1.$pass.$random2); 

		$self = $_SERVER['REQUEST_URI'];


		if(isset($_GET['logout']))
		{
			unset($_SESSION['login']);
		}


		if (isset($_SESSION['login']) && $_SESSION['login'] == $hash) {

				
				echo("<script>location.href = './index-home.php?msg=$msg';</script>");
				die(); 
		}

		else if (isset($_POST['submit'])) {


			if ((in_array($_POST['username'], $credentials)) && (in_array($_POST['password'], $credentials))){
				
				$_SESSION["login"] = $hash;
				$_SESSION["username"] = $_POST["username"];
				echo("<script>location.href = './index-home.php?msg=$msg';</script>");
				die();
				
			} else {
				
				echo '<h3 class="error_message">Invalid Username or Password.</h3>';
				display_login_form();
				
				
			}
		}	
			
		
		else { 

			display_login_form();

		}

		function str_array_pos($haystack, $needle) {
		   for ($i = 0, $l = count($haystack); $i < $l; ++$i) {
		        if (in_array($needle, $haystack[$i])) return $i;
		    }
		    return false;
		}

		function display_login_form(){ ?>

<div id="login-content">
			<form action="./" method='post' autocomplete="off">
		
		          <label for="username">Username</label>
			      <input type="username" name="username" placeholder="Username or email" id="username" >
			
			        <label for="password">Password</label>
			        		<p><a href="#">Forgot or Need Credentials?</a></p>

			        <input type="password" name="password" placeholder="Password" class="showpassword" id="password"> 
			<div id="lower">
					<input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
	
			        <input type="submit" name="submit" value="Submit" id="submit">
			        </div>
			</form>

			</div>


	<?php } ?>


</div>

<!-- Javascript -->
<!--[if lt IE 10]>
		<script type="text/javascript" src="js/excanvas.compiled.js"></script>
<![endif]-->

</body>