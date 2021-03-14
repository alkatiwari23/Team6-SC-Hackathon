<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="process_goal.php">
    <table>
    
   <tr>
    <td>Goal Name :</td>
    <td><input type="text" name="goalname" required></td>
   </tr>
   <tr>
    <td>Months :</td>
    <td><input type="number" name="months" required></td>
   </tr>
   <tr>
    <td>Current balance :</td>
    <td><input type="number" name="c_bal" required></td>
   </tr> 
   <tr>
    <td>Expected balance :</td>
    <td>
     <input type="number" name="e_bal" required>
    </td>
   </tr>
   <tr>
    <td><input type="submit" value="Submit"></td>
   </tr>
  </table>
    </form>
</body>
</html>