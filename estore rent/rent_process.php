
<?php 
session_start();
include('DBConnection.php');
$n=$_SESSION['name'];
$amm=$_SESSION['ramount'];


if(isset($_POST['payment_id']) && isset($_POST['amount']) && isset($_POST['name'])){
    $pymnt_id=$_POST['payment_id'];
    $amt=$_POST['amount'];
    $nme=$_POST['name'];
    $payment_status="completed";
    
    //mysqli_query($conn,"DELETE FROM `tbl_cart1` where name='$n'");
    //mysqli_query($conn,"DELETE FROM `tbl_checkout` where loginId='$id'");

    mysqli_query($conn,"INSERT INTO `tbl_rentpay`( `name`,`amount`,`payment_id`,`payment_status`)
     VALUES ('$n','$amt','$pymnt_id', '$payment_status')");
         
         $sql11 = mysqli_query($conn,"SELECT * FROM tbl_registration where name='$n' ");
         $row11 = mysqli_fetch_array($sql11);
         $id=$row11['regId'];
    
     if($_POST['amount']==$_SESSION['ramount'])
    mysqli_query($conn,"UPDATE `tbl_rent` set `status`='fp($amt)' where vendor_id='$id' and `status`='unpaid'");
else 
mysqli_query($conn,"UPDATE `tbl_rent` set `status`='pp($amt)' where vendor_id='$id'and  `status`='unpaid' and amount='$amt'");

    
}?>

