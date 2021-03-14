<?php
session_start();
if(isset($_POST['submit']))
{
 $avar=mysqli_connect('localhost','root','','finance') or die(mysql_error());
 //mysql_select_db('finance') or die(mysql_error());
 $email=$_POST['mail'];
 $pwd=$_POST['pass'];
 if($email!=''&&$pwd!='')
 {
   $query=mysqli_query($avar,"select * from register where email='".$email."' and password='".$pwd."'") or die(mysql_error());
   $res=mysqli_fetch_row($query);
   if($res)
   {
    $_SESSION['name']=$name;
    header('location:welcome.php');
   }
   else
   {
    echo'Email or password incorrect';
   }
 }
 else
 {
  echo'Enter both Email and Password';
 }
}
?>
</body>
</html>