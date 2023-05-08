<?php
session_start();
include('DBConnection.php');
if(isset($_POST['otp'])) {
    $entered_otp = $_POST['otp'];
    $correct_otp = $_SESSION['otp'];
    $order_id = $_POST['order_id'];

    if($entered_otp == $correct_otp) {
        $query=mysqli_query($conn,"UPDATE `tbl_checkout` SET `check_status`='Delivered' WHERE  ccid='$order_id'");
        echo "<script>alert('OTP verification successful. Product delivery confirmed!');window.location='DBindex.php'</script>";
        // Add your code here for confirming the product delivery
       
    } else {
        echo "<script>alert('OTP verification failed. Please try again.');window.location='DBindex.php'</script>";
    }
}
?>
