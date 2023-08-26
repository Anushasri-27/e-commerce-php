
 <?php
       $conn=mysqli_connect("localhost","root","","lifestyle");
       if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

$email = $_POST['e-mail'];
$email = mysqli_real_escape_string($conn, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($conn, $password);
$password = MD5($password);
// Query checks if the email and password are present in the database.
$query = "SELECT id, email FROM user WHERE email='" . $email . "' AND pass='" . $password . "'";
$result = mysqli_query($conn, $query)or die($mysqli_error($conn));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {
  $error = "<span class='red'>Please enter correct E-mail id and Password</span>";
  header('location: login.php?error=' . $error);
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  header('location: home.php');
}

?>