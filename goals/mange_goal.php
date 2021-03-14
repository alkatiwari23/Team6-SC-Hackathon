<?php
session_start();
$id=$_SESSION['userid'];

$join=mysqli_connect("localhost","root","","goals");

$sql = "SELECT * FROM `crt_goals` where username='$id'";

$rs = mysqli_query($join,$sql) or die("error");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Goal</td>
            <td>Target Amount:</td>
            <td>month Installment:</td>
            <td>Balance Amount</td>
            <td>Action</td>
        </tr>
        
        <?php
        if(!empty($rs))
        {
            while($row  = mysqli_fetch_array($rs)){
                echo '
                <tr>
                    <td>'.$row['goalname'].'</td>
                    <td>'.$row['e_bal'].'</td>
                    <td>'.$row['months'].'</td>
                    <td>'.$row['c_bal'].'</td>
                    <td><a href="amnt_dep.php?goal='.$row['gid'].'">Deposit Amount</a><a href="view_goal.php?goal='.$row['gid'].'">View</a></td>
                </tr>';
            }
        }      
  ?>
  
    </table>
</body>
</html>