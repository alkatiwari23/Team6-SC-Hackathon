
<?php    
        session_start();
         $name=$_SESSION['username'];  
           
         echo'<h2>Welcome '. $name.'</h2>';
         echo'<a href="signout.php">Signout</a>';
?>
<br>
<a href="create_goal.php">Create Goal</a>
<br>
<?php
$join=mysqli_connect("localhost","root","","goals");
$id=$_SESSION['userid'];
$sql = "SELECT * FROM `crt_goals` where username='$id'";

$rs = mysqli_query($join,$sql) or die("error");

if(!empty(mysqli_num_rows($rs))){
        ?>
<a href="mange_goal.php">Manage Goal</a>
<?php
}
?>