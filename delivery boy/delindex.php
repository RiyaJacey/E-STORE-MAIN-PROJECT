<?php
session_start();
include "DBConnection.php";
if(!isset($_SESSION['name']))
{
	header('location:../login/signin11.php');
}
else
{
	$e=$_SESSION['name'];

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Clothing Management System</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        estoreclothings@gmail.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +91 9048818583
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="#" class="nav-item nav-link">Home</a>
                            
                            <a href="#" class="nav-item nav-link active">My Account</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                                <div class="dropdown-menu">
                                   
                                    <a href="#" class="dropdown-item">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <?php
                                $sql3=mysqli_query($conn,"SELECT loginId from tbl_login where name='$e'");
                                while($row=mysqli_fetch_array($sql3))
                                {
                                  $a=$row['loginId'];
                                  
                                }
                                $sql4=mysqli_query($conn,"SELECT name from tbl_delreg1 where email in(SELECT email FROM tbl_login where loginId='$a');");
                                while($row=mysqli_fetch_array($sql4))
                                {
                                  $b=$row['name'];
                                  
                                ?>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?php echo $row['name']; ?></a>
                                <?php
                            }
                            ?>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Account</a>
                                    <a href="#" class="dropdown-item">Update</a>
                                    <a href="changep.html" class="dropdown-item">Change Password</a>
                                </div>
                            </div>
                        </div>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="#">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                   <!-- <div class="col-md-6">
                        <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="#" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="#" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <!-- Bottom Bar End --> 
        
        
        
        <!-- My Account Start -->
        <div class="my-account">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="dashboard-nav" data-toggle="pill" href="#dashboard-tab" role="tab"><i class="fa fa-tachometer-alt"></i>Dashboard</a>
                           <!-- <a class="nav-link" id="orders-nav" data-toggle="pill" href="#orders-tab" role="tab"><i class="fa fa-shopping-bag"></i>Orders</a>-->
                            <a class="nav-link" id="payment-nav" data-toggle="pill" href="#payment-tab" role="tab"><i class="fa fa-credit-card"></i>Confirmed Orders</a>
                           <!-- <a class="nav-link" id="address-nav" data-toggle="pill" href="#address-tab" role="tab"><i class="fa fa-map-marker-alt"></i>address</a>-->
                           <!-- <a class="nav-link" id="account-nav" data-toggle="pill" href="#orders-tab" role="tab"><i class="fa fa-user"></i>Payments</a>-->
                            <a class="nav-link" href="logout.php"><i class="fa fa-sign-out-alt"></i>Logout</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="dashboard-tab" role="tabpanel" aria-labelledby="dashboard-nav">
                                
                                <p>
                                <?php
$image_path = "img/delivery.jpg"; // replace with the path to your image
$width = 800; // replace with the desired width of the image
$height = 500; // replace with the desired height of the image

// echo "<img src='$image_path' width='$width' height='$height' alt='Image'>"; // display the image with the specified width and height
?>

                                    
                                </p> 
                            </div>
                            
                            <div class="tab-pane fade" id="payment-tab" role="tabpanel" aria-labelledby="payment-nav">
                                <h4>Today's Orders</h4>
                                <p>
                                <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display table-responsive" >
									<thead>
										<tr>
											<th>#</th>
											<th> Name</th>
											<th width="50">Contact no</th>
											<th>Shipping Address</th>
											<th>Product </th>
											<th>Qty </th>
											<th>Verify </th>
                                            <th>Status </th>
										</tr>
									</thead>
									<tbody>
									<?php 

$sql_query= mysqli_query($conn,"SELECT c.tamount,c.pay_id,c.count,c.pname,c.ccid,p.added_on,p.payment_status ,r.name,r. loginId, r.phone,r. address,r. place 
FROM tbl_registration as r
INNER JOIN tbl_checkout as c  ON r.loginId = c.loginId 
INNER JOIN tbl_payment as p ON c.pay_id = p.pay_id 
WHERE r.loginId IN ( SELECT loginId FROM tbl_checkout WHERE c.pay_id IN (SELECT p.pay_id FROM tbl_payment));");
$cnt=1;
while ($row = mysqli_fetch_assoc($sql_query))  {



$name = $row['name'];
$loginId = $row['loginId'];
$phone = $row['phone'];
$address = $row['address'];
$place = $row['place'];
//print_r($row); // check the contents of the $row array
$amount=$row['tamount'];
$pay_id=$row['pay_id'];
$count=$row['count'];
$pname=$row['pname'];
$ccid=$row['ccid'];
$added=$row['added_on'];
$status=$row['payment_status'];

?>	

<tr>
        <td><?php echo htmlentities($cnt);?></td>
        <td><?php echo htmlentities($name);?></td><br>
        <td><?php echo htmlentities($phone);?></td>
        <td><?php echo htmlentities($address);?><br><?php echo htmlentities($place);?></td>
        <td><?php echo htmlentities($pname);?></td>
        <td><?php echo htmlentities($count);?></td>
    
        <td><a href="otp.php?log_id=<?php echo htmlentities($log_id);?>&order_id=<?php echo htmlentities($ccid);?>" >Otp Verify</a></td>

        <td><?php echo htmlentities($status); ?></td>

    </tr>



									</tbody>
                                    <?php  $cnt=$cnt+1;} 

	
?>
								</table>
     <!--------------------------------------------------------------> 
                                </p>
                                
                                <div class="table-responsive">
                                    
                                    

</html>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- My Account End -->
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Get in Touch</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Estore Kottayam, Kerala</p>
                                <p><i class="fa fa-envelope"></i>estoreclothings@gmail.com</p>
                                <p><i class="fa fa-phone"></i>+91 9048818583</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
        <!-- Footer End -->
        
           
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
