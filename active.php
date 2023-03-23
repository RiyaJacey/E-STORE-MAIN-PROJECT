<?php
session_start();
include('DBConnection.php');
$id=$_REQUEST['id'];

$sql4="UPDATE tbl_productdetail set status='1' where pid='$id'";
if(mysqli_query($conn,$sql4))
{
    $_SESSION['msg2'] = "Category activated successfully";
}
header("Location: deletedet.php");
?>