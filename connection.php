        <!-- This file sets the cnnection to DB (if not exists then creates one) and Included in all the php files-->
<?php
    //start the session
    session_start();
        //make connection to DB
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="finance";
        $conn = new mysqli($servername, $username, $password);
        //if error occurred then die() and create a database!
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "CREATE DATABASE finance";
  if ($conn->query($sql) === TRUE) {
  } 
  $sql = "CREATE TABLE register (
      id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      username VARCHAR(20) NOT NULL,
      password VARCHAR(8),
       email VARCHAR(50),
       phone VARCHAR(10),
      reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
      )";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->query($sql) === TRUE) {
        }
?>




