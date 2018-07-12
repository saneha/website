<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and best sales prices">
	  <meta name="keywords" content="sales content, Keyservices, Green at its best">
  	<meta name="author" content="Saneha Dyal">
    <title>Remarkit</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		
<body>
<header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Navigation Page</span></h1>
        </div>
        <nav>
          <ul>
            <li class="current"><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="services.html">Services</a></li>
			
          </ul>
        </nav>
      </div>
    </header>
	
	<div class="content">
	
	<!-- logged in user information -->
		
		
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p><br>
			
	       <form method="post" action="">
		
               <input type="radio" name="radio" value="Customer"/>Customer</br>
                        <input type="radio" name="radio" value="Company"/>Company</br>
                         <input type = "submit", class = "buttonStyle2", value="Submit"/>
		       <a href="website/previousquote.php"><button>Previous Quote</button></a>
			   
           </form>	   
 
      <?php
	        if(isset($_POST['radio']) && ($_POST['radio']) == "Customer"){
         header("Location: http://localhost/website/customer.php"); 
		 
		 
		 
         }elseif(isset($_POST['radio']) && ($_POST['radio']) == "Company"){
         header("Location: http://localhost/website/company.php");  }
      ?>	
		  
		  <!-- notification message -->
		   
	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	  </div><br><br><br><br><br><br><br><br><br><br><br>
	   <footer>
      <p>RemarkIT Solutions Ltd © 2016 - Wellington, New Zealand
	  | Privacy Statement | Admin | Website Copyright; 2006</p>
    </footer>
		
</body>
</html>