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
</head>

<body>

<?php
       include 'nav.php' ;
	   
?>	
<div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="setting_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                      
                    </form>
                </div>
            </div>
        </div>
		<?php
	    include 'footer.php';
		?>
</body>
</html>
