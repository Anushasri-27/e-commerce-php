<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome |E-COMMERCE</title>
        
        <link href="css/bootstrap.css" rel="stylesheet">
         <link rel="stylesheet" href="css_ec.css" />
        <link href="css/style.css" rel="stylesheet">
        
        <script src="js/jquery.js"></script>
      
        <script src="js/bootstrap.min.js"></script>
		
<body>

<div class="row">
  <div class="col-xs-12">
 <div class="navbar navbar-default navbar-fixed-top">
         <div class="container">
		          <div class="navbar-header">
				         <a class="navbar-brand" href="index.php"> E-COMMERCE </a>
				        <button type="button" class="navbar-toggle" data-toggle="collapse data-target="#mynav">
                             <span class="icon-bar"></span>
						     <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
						</button>
				  </div>
				  <div class="collapse navbar-collapse" id="mynav">
					  <ul  class="navbar navbar-nav navbar-right">
					  <?php 
					          if (isset($_SESSION['username'])){
                                   echo '<li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li> 
	                                     <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
	                                     <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>} ';
                                         } else {
                                   echo '<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> SIGN UP</a></li> 
								        <li><a href="aboutus.php".php"><span class="glyphicon glyphicon-tasks"> </span>ABOUT US </a></li>
									  <li><a href="contactus.php"><span class="glyphicon glyphicon-earphone"></span> CONTACT US</a></li> 
									   <li><a href="modal.php"><span class="glyphicon glyphicon-earphone"></span> LOGIN</a></li>
									  '; } ?>
									 

</ul>

</div>

</div>
</div>
</div>
</div>
</body> 
</html>
