<?php
include "DBConnection.php";
session_start();
?>
<?php
$name = $_SESSION['name'];

if(!isset($_SESSION['name'])){
    header("Location: signin11.php");
    }
    
$user_id = $_SESSION['loginId'];

// $id=$_REQUEST['pid'];
// $targetDir= "images2/";
// $sql=mysqli_query($conn,"select * from tbl_productdetail where pid = $id");
// $img=mysqli_fetch_assoc($sql); 

// $pimage=addslashes(@file_get_contents($img['pimage']));

// $targetFilePath = $targetDir . $pimage;

// move_uploaded_file($_FILES["pimage"]["tmp_name"],$targetFilePath);

// mysqli_query($conn,"insert into tbl_cart ( `cid`,`cimage`, `cname`, `cbrand`, `ccolour`, `cram`, `cstorage`, `cprocessor`, `cdesp`, `cprice`, `coffer`, `ctprice`) select `pid`,`pimage`, `pname`, `pbrand`, `pcolour`, `pram`, `pstorage`, `processor`, `desp`, `price`, `offer`, `tprice` from tbl_productdetail where pid='$id'");


// $targetDir = "../login/images2/";
// $targetFilePath = $targetDir . $pimage;
// move_uploaded_file($_FILES["pimage"]["tmp_name"],$targetFilePath);
// mysqli_query($conn,"SELECT `tbl_login`.loginId,`tbl_productdetail`.pid,`tbl_laptop`.lid where loginid='$'");
// mysqli_query($conn,"insert into `tbl_cart1`(`loginId`, `pid`) select `loginId` ,`pid` from tbl_productdetail where pid='$id'");
// mysqli_query($conn,"insert into `tbl_cart1`(`loginId`, `pid`) values('$user_id','$id')");?>

?>
<script>
alert("view you cart");

</script>
<?php
    //echo "<script language='javascript'>";
    //echo 'window.location.href = "manage_flight1.php";';
    //echo "alert('flight details added succefully')";
    
    //echo "</script>";
    

?>
<html>
<?php 
include "DBConnection.php";

?>
<!DOCTYPE HTML>
<html>
<head>
<title>View Your Booking Status</title>
<link href="style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- Custom Theme files -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta name="keywords" content="Flat Cart Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<!--google fonts-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="jsbooks/jquery-1.11.0.min.js"></script>

<script>$(document).ready(function(c) {
    $('.close').on('click', function(c){
        $('.cake-top').fadeOut('slow', function(c){
            $('.cake-top').remove();
        });
    });   
});
</script>

<script>$(document).ready(function(c) {
    $('.close-btm').on('click', function(c){
        $('.cake-bottom').fadeOut('slow', function(c){
            $('.cake-bottom').remove();
        });
    });   
});
</script>
</head>
<body> 
<form action="#" method="POST">
<input type="hidden"name="id"value="<?= $row['pid']?>">
<div class="logo">
    <h3>MY CART</h3>
</div>
<div class="cart">
   <div class="cart-top">
      <div class="cart-experience">
         <h4>PRODUCTS IN YOUR CART </h4>
      </div>
      <div class="cart-login">
         <div class="cart-login-img">
            <img src="imagesbooks/loggin_man.png">
         </div>
         <div class="cart-login-text">
            <h5>USER</h5>
         </div>     
          <!--<div class="lang_list">
                <select tabindex="4" class="dropdown">
                    <option value="" class="label" value=""></option>
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                </select>
             </div>      -->
         <div class="clear"> </div>
      </div>
     <div class="clear"> </div>
   </div>
   <div class="cart-bottom">
     <div class="table">
        <table>
            <thead>
              <tr  class="main-heading">    
                            
                    <th class="long-txt">Image</th>
                    <th class="long-txt">Phone Name</th>
                    <th class="long-txt">Brand</th>
                    
                     <th class="long-txt">Price</th>  

             </tr>
                        
                    </thead>
                    <tbody>
                        <?php
                            

                            // $qry = $conn->query("SELECT * FROM tbl_cart1 where loginId=$user_id");
                            // $qry = $conn->query("SELECT * FROM tbl_productdetail p1 ,tbl_cart1 c1 where c1.pid=p1.pid,loginId=$user_id");
                            $qry = $conn->query("SELECT * FROM tbl_productdetail p1 JOIN tbl_cart1 c1 ON c1.pid=p1.pid WHERE c1.loginId=$user_id");
                            while($row = $qry->fetch_assoc()):
                                $a= 'images1/'.$row["pimage"];
                                
                                //$booked = $conn->query("SELECT * FROM booked_flight where id = ".$row['id'])->num_rows;

                         ?>
                         <tr>
                            
                            
                            <td class="text-right">
                            <img src="<?php echo $a ?> " style="width:150px; height:150px;"></td>
                             <td class="text-right">
                             <?php echo $row['pname'] ?></td>
                             <td class="text-right">
                             <?php echo $row['pbrand'] ?></td>
                             <td class="text-right">
                             <?php echo $row['tprice'] ?></td>
                             
                             
                            

                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
    
</div>



</html>