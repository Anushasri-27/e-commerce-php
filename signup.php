<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome |E-COMMERCE</title>
        
        <link href="img/css/bootstrap.css" rel="stylesheet">
         <link  href="css_ec.css" rel="stylesheet" type="text/css"/>
        <link href="img/css/style.css" rel="stylesheet">
        
        <script src="img/js/jquery.js"></script>
      
        <script src="img/js/bootstrap.min.js"></script>
	
</head>
<body>
<?php
       include 'nav.php' ;
	   
?>
 <div class="container-fluid" id="content">
            <div class="row" style="border:none;">
			  <div class="col-lg-4 col-xs-12">
			  <img src="img/yess.jpg" width="600px" height="700px" style="margin-left:170px;" />
			  </div>
			 <div class="col-lg-3  col-md-6 col-md-offset-3">
                <div class="container" style="width:700px; height:700px; border:none;">
                   
                        <h2>SIGN UP</h2>
                       <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required  />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{6,}" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required  />
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
		<?php
       include 'footer.php' ;
?>
</body>
</html>
