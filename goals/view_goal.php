<?php session_start();

$goal_id = $_REQUEST['goal'];

$id=$_SESSION['userid'];

$join=mysqli_connect("localhost","root","","goals");

$sql = "SELECT * FROM `crt_goals` where gid='$goal_id'";

$rs = mysqli_query($join,$sql) or die("error");

$row = mysqli_fetch_array($rs);

$target_amt = $row['months'];

// count balance
$sql_ct = "SELECT count(a_bal) as count_install FROM `balance` where gid='$goal_id'";
$rs_ct = mysqli_query($join,$sql_ct) or die("error");
$row_ct = mysqli_fetch_array($rs_ct);
$count_install = $row_ct['count_install'];

// deposite amount
$sql_bal = "SELECT sum(a_bal) as sum_install FROM `balance` where gid='$goal_id'";

$rs_bal = mysqli_query($join,$sql_bal) or die("error");
$row_bal = mysqli_fetch_array($rs_bal);
$sum_install = $row_bal['sum_install'];
$target_bal = $row['e_bal'];
$current_bal = $row['c_bal'];
$target_month = $row['months'];

?>

<p>Target Amount: <?= $target_bal; ?></p>
<p>Saving Amount: <?= $current_bal+$sum_install; ?></p>

<?php

if($target_bal==$current_bal+$sum_install)
echo "Your Goal Achived";
else{
    $require_amt = $target_bal-($current_bal+$sum_install);
    $remaining_month = $target_amt-$count_install; 
  echo "<p>Require Amount: ".$require_amt."</p>";  
  echo "<p>Remaining Month: ".$remaining_month."</p>";  
}
?>