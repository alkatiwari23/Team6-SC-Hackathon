<?php
$username = $_POST['firstname'];
$password = $_POST['password'];
$email = $_POST['mail'];
$phone = $_POST['phone'];
if (!empty($username) || !empty($password) || !empty($email) || !empty($phone)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "finance";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From register Where email = ? Limit 1";
     $INSERT = "INSERT Into register (username, password, email,phone) values(?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssi", $username, $password, $email,$phone);
      $stmt->execute();
      echo "signed in successfully";
echo'<a href="login.php">ClickHere</a>';
echo " to go back to login page";
     } 
else {
      echo "Someone already registerd using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All fields are required";
 die();
}
?>