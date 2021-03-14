<?php session_start();

$gid=$_REQUEST['goal_id'];


$userid=$_SESSION['userid']; 

// $goalname=$_REQUEST['goalname'];
// $months=$_REQUEST['months'];
// $c_bal=$_REQUEST['c_bal'];
$a_bal=$_REQUEST['a_bal'];

$join=mysqli_connect("localhost","root","","goals");

$sql = "INSERT INTO `balance`(`a_bal`,gid,userid) VALUES ('$a_bal','$gid','$userid')";

mysqli_query($join,$sql) or die("eror");
?>