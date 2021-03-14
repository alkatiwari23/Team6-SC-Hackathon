<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="amnt_dep_process.php">
    <h2>Add Amount For Your Goal</h2>
    <table>
   <!-- <tr>
    <td>Name :</td>
    <td><input type="text" name="goalname" required></td>
   </tr>
   <tr>
    <td>Months :</td>
    <td><input type="number" name="months" required></td>
   </tr> -->
   <tr>
   <?php
   $gid = $_REQUEST['goal'];
   ?>
   <input type="hidden" name="goal_id" value="<?= $gid ?>">
    <td>Add balance :</td>
    <td><input type="number" name="a_bal" required></td>
   </tr> 
   <tr>
    <td><input type="submit" value="Submit"></td>
   </tr>
  </table>
    </form>
</body>
</html>