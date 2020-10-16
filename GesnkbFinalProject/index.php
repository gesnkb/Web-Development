<?php
	session_start();
	$_SESSION['loggedIn'] = false;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
		<link rel=icon href="/FinalProject/images/Smash_Ball.png">
        <link rel=stylesheet href="/FinalProject/css/layout.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>	
    <body>
		<div class=wrapper>
			<div class="navbar">
				<a href="/FinalProject/">Home</a>
				<a href="/FinalProject/characters/">Characters</a>
				<div class="dropdown">
					<button class="dropbtn">Tier Lists 
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content">
						<a href="/FinalProject/tier-lists/make-a-tier-list/">Create Tier List</a>
						<a href="/FinalProject/tier-lists/">How to make a tier list</a>
					</div>
				</div> 
				<a id=login href="/FinalProject/login/">
					<?php
						if($_SESSION["loggedIn"] == true){
							echo "Logout";
						}
						else{
							echo "Login";
						}
					?>
				</a>
			</div>
			<div class="body">
				<form id=login-form>
					<textarea id="username" type="text" placeholder="Username"></textarea>
					<textarea id="password" type="text" placeholder="Password"></textarea>
					<br>
					<button type="button" onclick="login()">Login</button>
				</form>
			</div>
			<div class=footer>
				<div id=footer-info>
					All Rights go to Nintendo
				</div>
			</div>
		</div>

		<script src="login-page.js"></script>
		<script src="/FinalProject/javascript/getScreen.js"></script>
    </body>
</html>