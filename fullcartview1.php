<?php
include "DBConnection.php";
session_start();
?>
<?php
$name = $_SESSION['name'];
$user_id = $_SESSION['loginId'];

if(!isset($_SESSION['name'])){
    header("Location: signin11.php");
    }
    


?>

<?php
    //echo "<script language='javascript'>";
    //echo 'window.location.href = "manage_flight1.php";';
    //echo "alert('flight details added succefully')";
    
    //echo "</script>";
    

?>
<html>
<?php 
include "DBConnection.php";




                    






if(isset($_POST['checkout']))
{

    echo "<script>showPopup();</script>";
    echo "<script>sessionStorage.setItem('popupShown', 'true');</script>";
    $qry = $conn->query("SELECT p2.lid,p2.limage,p2.lname ,p2.ltprice,p2.lbrand FROM tbl_laptop p2 JOIN tbl_lapcart c2 ON c2.lid=p2.lid WHERE c2.loginId=$user_id UNION SELECT p1.pid,p1.pimage,p1.pname,p1.price,p1.pbrand FROM tbl_productdetail p1 JOIN tbl_cart1 c1 ON c1.pid=p1.pid WHERE c1.loginId=$user_id");
while($row = $qry->fetch_assoc()){
    $price = $row['ltprice'];
    $lid=$row['lid'];
    $name = $row['lbrand'];

    $c=$_POST['count_'.$row['lid']];
    $s=$_POST['sub'];

    $sql = "INSERT INTO `tbl_checkout`(`pid`,`loginId`, `count`, `tamount`) VALUES ('$lid','$user_id','$c','$s')";
    $result = mysqli_query($conn, $sql);
    
}
?>
<!-- <script>alert("succeffully Inserted");</script> -->
<?php
}
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
<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<style>
    .table
    { 
        color:white;
font-size:50px;

    }
    .popup {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.4);
  z-index: 999;
  display: none;
}

.popup-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.4);
  max-width: 400px;
  width: 100%;
}

.close-button {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 20px;
  font-weight: bold;
  cursor: pointer;
}

    </style>
</head>
<body style="  background-color: rgba(0.9, 0, 0, 0.9);"> 
<form  name="form1" method="POST" action="#" >
<input type="hidden"name="id"value="<?= $row['pid']?>">
<input type="hidden" id="name1" value="<?php echo $name; ?>">

<div class="logo">
    <h3>MY CART</h3>
</div>
<div class="cart">
   <div class="cart-top">
      
      <div class="cart-login">
         
   <div class="cart-bottom">
     <div class="table">
     <input type="hidden" id="name1" value="<?php echo $name; ?>">

        <table style="color:white ">
            <thead class="text-center">
              <tr  class="text-center">    
                            
                    <th class="long-txt">Image</th>
                    <th class="long-txt">Brand</th>

                    <th class="long-txt">Product Name</th>
                    
                     <th class="long-txt">Total Price</th>
                     <th class="long-txt">qnty</th>  
                     <th class="long-txt"> final price</th>
                     <th class="long-txt">delete</th>

             </tr>
                        
                    </thead>
                    <tbody>
                    <?php

                    
$totalPriceSum = 0;
$qry = $conn->query("SELECT p2.lid,p2.limage,p2.lname ,p2.ltprice,p2.lbrand FROM tbl_laptop p2 JOIN tbl_lapcart c2 ON c2.lid=p2.lid WHERE c2.loginId=$user_id UNION SELECT p1.pid,p1.pimage,p1.pname,p1.price,p1.pbrand FROM tbl_productdetail p1 JOIN tbl_cart1 c1 ON c1.pid=p1.pid WHERE c1.loginId=$user_id");
while ($row = $qry->fetch_assoc()): 
    $price = $row['ltprice'];
    $lid=$row['lid'];
    $name = $row['lbrand'];
?>
    

    <tr>
        <td class="text-center"><img src="images2/<?php echo $row['limage'] ?>" style="width:150px; height:150px;"></td>
        <td class="text-center"><?php  
        $sql = "SELECT pcat_name FROM tbl_phonecategory WHERE pcat_id = $name";
        $result = mysqli_query($conn, $sql);
        $row11 = mysqli_fetch_assoc($result);
        echo $row11['pcat_name']; ?></td>
        <td class="text-center"> <?php echo $row['lname'] ?></td>
        <td class="text-center"><?php echo $row['ltprice'] ?></td>
        <td class="text-center">
            <input type="number" name="count_<?php echo $row['lid'] ?>" id="count_<?php echo $row['lid'] ?>" onmouseout="fprice(<?php echo $row['ltprice'] ?>, 'count_<?php echo $row['lid'] ?>', 'total_<?php echo $row['lid'] ?>')">
        </td>
        <td class="text-center">
            <input type="number" name="total" id="total_<?php echo $row['lid'] ?>" readonly>
        </td>
        
        <td class="text-center">
            <?php echo '<p><a href="cartdelete.php?id='.$row['lid'].'">Delete</a></p>'; ?>
        </td>
</tr>
<?php endwhile; ?>
<tr>
<td>
<label for="sub"><b>SubTotal : $</b>
<input type="number" name="sub" id="sub" value="<?php echo $totalPriceSum; ?>" ></label></td>
<!-- <td><input type="button" id="rzp-button1"name="btn"value="pay now"class="btn btn-primary" onclick="pay_now()"/>
</td> -->

<td>
  <!-- <input type="submit" name="checkout" id="checkout" class="btn btn-primary" value="Checkout"> -->
  <button  type="submit" name="checkout" value="checkout">Click me</button>

  <div id="popup" class="popup">
    <div class="popup-content">
        <span class="close-button" onclick="hidePopup()">&times;</span>
        <h2>This is a pop-up above</h2>
        <p>Here is some content for the pop-up.</p>
    </div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
        </div>
    </div>

    
    
</div>
</form>

<script>
function fprice(price, countId, totalId) {
    var count = Number(document.getElementById(countId).value);
    var total = count * price;
    document.getElementById(totalId).value = total.toFixed(2);
    
    // Get the value of the total for the current row
    var totalPriceSum = 0;
    var allTotalInputs = document.getElementsByName("total");
    for (var i = 0; i < allTotalInputs.length; i++) {
        var rowTotal = Number(allTotalInputs[i].value);
        if (!isNaN(rowTotal)) {
            totalPriceSum += rowTotal;
        }
    }
    document.getElementById("sub").value = totalPriceSum.toFixed(2);
}

function pay_now(){
		var name = jQuery('#name1').val();
		console.log(name);
		
        var amount=document.getElementById("sub").value;
        var options =  {
            "key": "rzp_test_zigWqqvftHFAgY", // Enter the Key ID generated from the Dashboard
            "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "E-Store",
            "description": "Test Transaction",
            "image": "https://example.com/your_logo",
            "handler":function(response){
              
               jQuery.ajax({
                   type:"POST",
                   url: "payment_process.php",
                   data:"payment_id="+response.razorpay_payment_id+"&amount="+amount+"&name="+name,
                   success:function(result){
                       window,location.href="thankyou.php";
                   }
               });
              
      }
        
    
};
var rzp1 = new Razorpay(options);

    rzp1.open();
    
    }
</script>

<script>
    $(document).ready(function() {
  $('#btn').click(function() {
    var lid = <?php echo $lid; ?>;
    var quantity = $('#count').val();
    $.ajax({
      type: 'POST',
      url: 'update_stock.php',
      data: {
        lid: lid,
        quantity: quantity
      },
      success: function(response) {
        alert(response);
      }
    });
  });
});
</script>
<script>
    function showPopup() {
        var popup = document.getElementById("popup");
        popup.style.display = "block";
        sessionStorage.setItem('popupShown', 'true');
    }

    function hidePopup() {
        var popup = document.getElementById("popup");
        popup.style.display = "none";
        sessionStorage.setItem('popupShown', 'false');
    }

    // Check if the pop-up should be shown
    var popupShown = sessionStorage.getItem('popupShown');
    if (popupShown === 'true') {
        showPopup();
        // Clear the flag to prevent the pop-up from showing again
        sessionStorage.setItem('popupShown', 'false');
    }

</script>
                
            
</body>


</html>