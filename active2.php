<?php
session_start();
include('DBConnection.php');
$id=$_REQUEST['id'];

$sql4="UPDATE tbl_laptop set status='1' where lid='$id'";
if(mysqli_query($conn,$sql4))
{
    $_SESSION['msg2'] = "Category activated successfully";
}
header("Location: deletedet2.php");
?>