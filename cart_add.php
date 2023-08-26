
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
       $conn=mysqli_connect("localhost","root","","lifestyle");
       if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
  
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
    mysqli_query($con, $query) or die(mysqli_error($con));
    header('location: products.php');
}
?> 
</body>
</html>

