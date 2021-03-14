<!DOCTYPE HTML>
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
.required{
color:red;
}
</style>
  <title>Signup Form</title>
</head>
<body>
<h1>sign up</h1>
 <form action="insert.php" method="POST">
  <table cellspacing='0' align='center'>
<div class="control">
   <tr>
    <td><label for="username">Name <span class="required">*</span>:</label></td>
    <td><input type="text" name="username" required class="form-cotrol"></td>
   </tr>
   <tr>
    <td><label for="password">Password <span class="required">*</span>:</label></td>
    <td><input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,8}" title="password must contain a minimum of 6 characters, a maximum of 8 characters, numbers(0-9), letters(a-z, A-Z), special character" required>
  </form>
   <tr>
    <td><label for="email">Email <span class="required">*</span>:</label></td>
    <td><input type="email" name="email" required></td>
   </tr> 
</div>
   <tr>
    <td>Phone no :</td>
    <td>
     <input type="phone" name="phone">
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit"></td>
   </tr>
</div>
<!--<div id="message">
 <tr><td><h3>Password must contain the following:</h3></tr></td>
  <tr><td><p id="letter" class="invalid">A <b>lowercase</b> letter</p></tr></td>
  <tr><td><p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p></tr></td>
 <tr><td><p id="number" class="invalid">A <b>number</b></p></tr></td>
 <tr><td><p id="length" class="invalid">Minimum <b>8 characters</b></p></tr></td>
</div>-->
  </table>
 </form>
</body>
</html>