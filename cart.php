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
 <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <?php
     $passwrd=$_POST["password"];
     $name=$_POST["name"];
	 $CONTACT=$_POST["contact"];
	 $CITY=$_POST["city"];
	 $enquiry=$_POST["address"];
	 ?>

 <?php
       $conn=mysqli_connect("localhost","root","","lifestyle");
       if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
	
                        $sum = 0;
                       
                        $query = "SELECT items.price AS Price, items.id, items.name AS Name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                        $result = mysqli_query($conn, $query)or die($mysqli_error($conn));
                        if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum+= $row["Price"];
                                    $id .= $row["id"] . ", ";
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["Name"] . "</td><td>Rs " . $row["Price"] . "</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php?itemsid=" . $id . "' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "Add items to the cart first!";
                        }
                        ?>
                        <?php
                        ?>
                    </table>
                </div>
            </div>
        </div>
 <?php
	    include 'footer.php';
		?>
    </body>
</html>
