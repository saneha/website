<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and best sales prices">
	  <meta name="keywords" content="sales content, Keyservices, Green at its best">
  	<meta name="author" content="Saneha Dyal">
    <title>Remarkit | Services</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">"Green at its Best"</span></h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a></li>
			<li class="current"><a href="Login.php">Login</a></li>
			<li><a href="register.php">Sign Up</a></li>
          </ul>
        </nav>
      </div>
    </header>

		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">
	

		<?php include('errors.php'); ?> 

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form><br>
	<br>
	<br><br><br><br><br><br><br><br><br><br>
	<footer>
      <p>RemarkIT Solutions Ltd © 2016 - Wellington, New Zealand
| Privacy Statement | Admin | Website by Firstfruits Copyright &copy; 2017</p>
    </footer>

</body>
</html>