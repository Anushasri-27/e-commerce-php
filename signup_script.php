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
<body style="text-align:center; font-size:36px; color:#FF0000;">

  <?php
    include 'common.php' ;
	 ?>
WELCOME  TO OUR WEBSITE  <?php   
 echo   $name=$_POST["name"]; ?>
 <?php
       $conn=mysqli_connect("localhost","root","","lifestyle");
       if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
  
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($conn, $name);

  $email = $_POST['e-mail'];
  $email = mysqli_real_escape_string($conn, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($conn, $password);
  $password = MD5($password);

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($conn, $contact);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($conn, $city);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($conn, $address);

  $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
  $regex_num = "/^[789][0-9]{9}$/";

  $query = "SELECT * FROM user WHERE email='$email'";
  $result = mysqli_query($conn, $query)or die($mysqli_error($conn));
  $num = mysqli_num_rows($result);


if ($num != 0) {
    $m = "<span class='red'>Email Already Exists</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_email, $email)) {
    $m = "<span class='red'>Not a valid Email Id</span>";
    header('location: signup.php?m1=' . $m);
  } else if (!preg_match($regex_num, $contact)) {
    $m = "<span class='red'>Not a valid phone number</span>";
    header('location: signup.php?m2=' . $m);
  } else {
    
    $query = "INSERT INTO user(name, email, pass, contact, city, address)VALUES('" . $name . "','" . $email . "','" . $password . "','" . $contact . "','" . $city . "','" . $address . "')";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: modal.php');
  }
?>
 <center>
  <a href="products.php"> <img src="img/Banner.png" width="500px" align="absmiddle"  height="500px"/> </a>
  </center>

</body>
</html>
