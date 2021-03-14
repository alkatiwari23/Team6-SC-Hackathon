<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }
</style>
</head>
<body>
<h1>Login<h1>
<form action='#' method='post'>
<table cellspacing='5' align='center'>
<tr><td>Email:</td><td><input type='text' name='email'/></td></tr>
<tr><td>Password:</td><td><input type='password' name='pwd'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
<h3>New to Women Investment Application?<a href="signup.php">Create Account</a></h3>

</form>
<?php
session_start();
if(isset($_POST['submit']))
{
 $avar=mysqli_connect('localhost','root','','goals') or die(mysql_error());
 //mysql_select_db('finance') or die(mysql_error());
 $email=$_POST['email'];
 $pwd=$_POST['pwd'];
 if($email!=''&&$pwd!='')
 {
   $query=mysqli_query($avar,"select * from register where email='".$email."' and password='".$pwd."'") or die(mysql_error());
   $res=mysqli_fetch_array($query);
  //  print_r($res);
   if($res)
   {
    $_SESSION['userid']=$res['id'];
    $_SESSION['user_email']=$res['email'];
    $_SESSION['username']=$res['username'];
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