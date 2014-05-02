<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />		
		<title>PLDT EGMM</title>
		
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				if (!($.browser.safari || $.browser.mozilla)) {
					$("form").hide();
					$("<div class='error' />").html("<h2>Browser Not Supported</h2>The Treemo Labs Dashboard utilizes cutting-edge browser technologies.<br /><br />We currently only support <ul><li>Firefox (version &gt; 3.5 recommended)</li><li>Safari (version &gt; 3 recommended)</li></ul>").appendTo('#login-content');
				}
			});
		</script>
		
		<style type="text/css">
			* {
				font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			}
			
			body {
				margin: 0;
				padding: 0;
				color: #fff;
				background: url('bg-login.png') repeat #B80000 ;
				font-size: 14px;
				text-shadow: #050505 0 -1px 0;
				font-weight: bold;
			}
			
			li {
				list-style: none;
			}
			
			#dummy {
				position: absolute;
				top: 0;
				left: 0;
				border-bottom: solid 3px #B80000 ;
				height: 250px;
				width: 100%;
				background: url('bg-login-top.png') repeat #fff;
				z-index: 1;
			}
			
			#dummy2 {
				position: absolute;
				top: 0;
				left: 0;
				border-bottom: solid 2px #B80000 ;
				height: 252px;
				width: 100%;
				background: transparent;
				z-index: 2;
			}
			
			#login-wrapper {
				margin: 0 0 0 -160px;
				width: 320px;
				text-align: center;
				z-index: 99;
				position: absolute;
				top: 0;
				left: 50%;
			}
			
			#login-top {
				height: 120px;
				padding-top: 140px;
				text-align: center;
			}
			
			label {
				width: 70px;
				float: left;
				padding: 8px;
				line-height: 14px;
				margin-top: -4px;
			}
			
			input.text-input {
				width: 200px;
				float: right;
				-moz-border-radius: 4px;
                -webkit-border-radius: 4px;
				border-radius: 4px;
				background: #fff;
				border: solid 1px transparent;
				color: #555;
				padding: 8px;
				font-size: 13px;
			}
			
			input.button {
				float: right;
				padding: 6px 10px;
				color: #fff;
				font-size: 14px;
				background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#a4d04a), to(#459300));
				text-shadow: #050505 0 -1px 0;
				background-color: #459300;
				-moz-border-radius: 4px;
                -webkit-border-radius: 4px;
				border-radius: 4px;
				border: solid 1px transparent;
				font-weight: bold;
				cursor: pointer;
				letter-spacing: 1px;
			}
			
			input.button:hover {
				background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#a4d04a), to(#a4d04a), color-stop(80%, #76b226));
				text-shadow: #050505 0 -1px 2px;
				background-color: #a4d04a;
				color: #fff;
			}
			
			div.error {
				padding: 8px;
				background: rgba(52, 4, 0, 0.4);
				-moz-border-radius: 8px;
                -webkit-border-radius: 8px;
				border-radius: 8px;
				border: solid 1px transparent;
				margin: 6px 0;
			}
		</style>	

	</head>
  
	<body id="login">
		
		<div id="login-wrapper" class="png_bg">
			<div id="login-top">
				<img src="assets/pldt logo.png" height="100px"/>
			</div>
			
			<div id="login-content">
				<form action="session_login.php" method="POST">	
				<?php
				if(isset($_GET['error'])&&$_GET['error']=='login'){
				?>
					<span class="alert alert-danger"> Invalid ID number or password</span>
				<?php	
				}
				if(isset($_GET['password'])&&$_GET['password']=='updated'){?>
					<span>Your password has been updated. Please log-in to continue</span><br><br>
				<?php
				}
				?>				
					<p>
						<label for = "idNo">ID Number</label>
						<input id= "idNo" value="" name="idNo" class="text-input" type="text" required />
					</p>
					<br style="clear: both;" />
					<p>
						<label for = "password">Password</label>
						<input id="password" name="password" class="text-input" type="password" required/>
					</p>
					<br style="clear: both;" />
					<p>
						<input class="button" type="submit" value="Sign In" />
					</p>
					
				</form>
			</div>
		</div>
		<div id="dummy"></div>
		<div id="dummy2"></div>
  </body>
</html>
