<?php 
include "DBConnection.php";
?>
<!DOCTYPE HTML>
<html>
<head>
<title>STOCK MANAGEMENT</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--//skycons-icons-->
<script src="js/Chart.min.js"></script>
<!--pop up strat here-->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
<!--pop up end here-->
<style>
	
		/* .copyrights
		{
			position:absolute;
			bottom:0;
			left:0;
			width:100%;
		}
		.sidebar-menu {
       position: absolute;
       float: left;
       width: 220px;
       top: 0px;
       left:0px;
       bottom: 0;
       background-color:#202121;
       color: #aaabae;
       
    height:100%;
       } */
	   .copyrights
		{
			position:fixed;
			bottom:0;
			width:100%;
		}
		.sidebar-menu {
       position: fixed;
       float: left;
       width: 220px;
       top: 0px;
       left:0px;
       bottom: 0;
       background-color:#202121;
       color: #aaabae;
       
    height:100%;
       }
		
		

    td {
        border:5px ;
        width:70%;
    }
	.chart {
			display: flex;
			align-items: flex-end;
			height: 300px;
			margin: 20px 0;
			border: 1px solid #ccc;
			padding: 10px;
            overflow-x: scroll;
		}
		.bar {
			flex: 1;
			margin: 0 10px;
			background-color: #3f51b5;
			color: white;
			font-size: 16px;
			text-align: center;
			transition: height 0.5s;
            word-wrap: break-word;
		}
    
    </style>
</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									 <a href="index.html"> <h1>E-Store</h1> 
									<!--<img id="logo" src="" alt="Logo"/>--> 
								  </a> 								
							</div>
							<!--search-box-->
								<div class="search-box">
									<form>
										<input type="text" placeholder="Search..." required="">	
										<input type="submit" value="">					
									</form>
								</div><!--//end-search-box-->
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							<div class="profile_details_left"><!--notifications of menu start -->
								<ul class="nofitications-dropdown">
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new messages</h3>
												</div>
											</li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p4.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li class="odd"><a href="#">
												<div class="user_img"><img src="images/p2.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor </p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											</a></li>
											<li><a href="#">
											   <div class="user_img"><img src="images/p3.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all messages</a>
												</div> 
											</li>
										</ul>
									</li>
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 3 new notification</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="user_img"><img src="images/p5.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											  <div class="clearfix"></div>	
											 </a></li>
											 <li class="odd"><a href="#">
												<div class="user_img"><img src="images/p6.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li><a href="#">
												<div class="user_img"><img src="images/p7.png" alt=""></div>
											   <div class="notification_desc">
												<p>Lorem ipsum dolor</p>
												<p><span>1 hour ago</span></p>
												</div>
											   <div class="clearfix"></div>	
											 </a></li>
											 <li>
												<div class="notification_bottom">
													<a href="#">See all notifications</a>
												</div> 
											</li>
										</ul>
									</li>	
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a>
										<ul class="dropdown-menu">
											<li>
												<div class="notification_header">
													<h3>You have 8 pending task</h3>
												</div>
											</li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Database update</span><span class="percentage">40%</span>
													<div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													<div class="bar yellow" style="width:40%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar green" style="width:90%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
													<div class="clearfix"></div>	
												</div>
											   <div class="progress progress-striped active">
													 <div class="bar red" style="width: 33%;"></div>
												</div>
											</a></li>
											<li><a href="#">
												<div class="task-info">
													<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
												   <div class="clearfix"></div>	
												</div>
												<div class="progress progress-striped active">
													 <div class="bar  blue" style="width: 80%;"></div>
												</div>
											</a></li>
											<li>
												<div class="notification_bottom">
													<a href="#">See all pending tasks</a>
												</div> 
											</li>
										</ul>
									</li>	
								</ul>
								<div class="clearfix"> </div>
							</div>
							<!--notification menu end -->
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/p1.png" alt=""> </span> 
												<div class="user-name">
													<p>Malorum</p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="#"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
    <div class="price-block-main">
    	<div class="prices-head">
    		<h2>Prices</h2>
    	</div>
    	<div class="price-tables">
	    		<div class="col-md-4 price-grid">
	    		   <div class="price-block">
		    			<div class="price-gd-top pric-clr1">
		    				<h4>Total Revenue</h4>
                            
		    				
		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<ul>
			    					<li><?php // Connect to database


// Check connection

// Retrieve data from database
$sql = "SELECT  `pid`,`pname`, `pbrand`, `price`, `offer`, `tprice` FROM `tbl_productdetail`";
$result = $conn->query($sql);
$row3 = $result->fetch_assoc();



$total_revenue = 0;

if ($result->num_rows > 0) {
    // Loop through each product?>
    <?php
    while($row = $result->fetch_assoc()) {
        $pid = $row["pid"];

        $pname = $row["pname"];
        $pbrand = $row["pbrand"];
        $price = $row["price"];
        $tprice = $row["tprice"];
        $offer = $row["offer"];
        $sql1 = "SELECT `stock_id`, `product_id`, `stock_quantity` FROM `stock` where product_id=$pid";
        $result1 = $conn->query($sql1);
        $row1 = $result1->fetch_assoc();
        $quantity = $row1["stock_quantity"];
  
        // Calculate revenue for each product
        
        $revenue = ($tprice - $price) * $quantity;

        // Add revenue to total
        $total_revenue += $revenue;

        // Display product details and revenue
        ?>
        <table><tr><td><?php echo "Product: $pname ($pbrand)\n"?></td>
        <td><?php echo "Revenue: $revenue\n\n"; ?></td></tr></table>
        <?php
    }
} else {
    echo "No products found";
}
?>

</li>
			    					
			    				</ul>
		    				</div>
		    			</div>
		    		    <div class="price-selet pric-clr1">		    			   
		    			   	  <a ><?php echo "Total Revenue: $total_revenue";

// Close connection
$conn->close();
 ?></a>
		    			</div>
		    		</div>
	    		</div>
	    		<div class="col-md-4 price-grid">
	    			<div class="price-block">
		    			<div class="price-gd-top pric-clr2">
		    				<h4>Professional</h4>
		    				
		    			</div>
		    			
			    			
							
	<div class="dygno">
		<h2>Doughnut</h2>
		<canvas id="doughnut" height="300" width="470" style="width: 470px; height: 300px;"></canvas>
		<script>
			

			var doughnutData = [
				<?php
					include "DBConnection.php";
					
					$sql9= "SELECT `ccid`, `loginId`, `count`, `price`, `pname`, `pbrand`, `status` FROM `tbl_checkout`";
					$result9 = $conn->query($sql9);
					
					$doughnut_data = array();
					
					if ($result9->num_rows > 0) {
						while($row9 = $result9->fetch_assoc()) {
							$pname = $row9["pname"];
							$pbrand = $row9["pbrand"];
							$count = $row9["count"];
							$tamount = $row9["price"];

							$product_key = $pname . " - " . $pbrand;

							if (isset($doughnut_data[$product_key])) {
								$doughnut_data[$product_key] += $tamount;
							} else {
								$doughnut_data[$product_key] = $tamount;
							}
						}
					}
			

					// Sort the doughnut data in descending order
					arsort($doughnut_data);

					
        foreach ($doughnut_data as $product_key => $tamount) {
            echo "{value: ".$tamount.", color: '".random_color()."', label: '".$product_key."'},";
        }
    
					
					// Close the database connection
					$conn->close();

					function random_color() {
						return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
					}
				?>
			];
			var labels = [
    
	<?php
        foreach ($doughnut_data as $product_key => $tamount) {
            echo "{value: ".$tamount.", color: '".random_color()."', label: '".$product_key."'},";
        }
    ?>

];
			
new Chart(document.getElementById("doughnut").getContext("2d")).Doughnut(doughnutData, {
    tooltipTemplate: "<%=label%>: $<%= value %>",
    onAnimationComplete: function() {
        this.showTooltip(this.segments, true);
    },
    tooltipEvents: [],
    showTooltips: true,
    legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%>: $<%=segments[i].value%><%}%></li><%}%></ul>'
});

		</script>
	


	</div>
		    				
		    		    <div class="price-selet pric-clr2">
		    			   	 <a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
		    			</div>
		    		</div>
	    		</div>
	    		<div class="col-md-4 price-grid">
	    			<div class="price-block">
		    			<div class="price-gd-top pric-clr3">
		    				<h4>Stock Level Monitoring</h4>
		    				
		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
								<h2>Products Out Of Stock</h2>
							<?php
// Include the database connection file
include "DBConnection.php";

// Set the stock threshold and recipient email address
$stock_threshold = 5;


// Get the products with low stock
$sql = "SELECT * FROM stock WHERE stock_quantity <= $stock_threshold";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Loop through each product and send an email notification
    while ($row = $result->fetch_assoc()) {
        $pid = $row["product_id"];
		
        $sq = $row["stock_quantity"];
$sql9 = "SELECT p2.lname  FROM tbl_laptop p2  WHERE p2.lid=$pid UNION SELECT p1.pname FROM tbl_productdetail p1  WHERE p1.pid=$pid";

// $sql9 = "SELECT   `pname` FROM `tbl_productdetail` WHERE pid=$pid";
$result9 = $conn->query($sql9);
$row9 = $result9->fetch_assoc();
$pe=$row9['lname'];?>
<table><tr>&nbsp;</tr>
<tr><h3><?php echo($pe);?></h3></tr></table>
	<?php
        // Compose the email message
        
        // Send the email notification
        
    }
}

// Close the database connection
$conn->close();
?>
		    				</div>
		    			</div>
		    		    <div class="price-selet pric-clr3">
		    			   	<a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
		    			</div>
		    		</div>
    	       </div>
    	       
	    		<div class="col-md-4 price-grid">
	    			<div class="price-block">
		    			<div class="price-gd-top pric-clr1">
		    				<h4>Sales Chart</h4>
		    				
		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<ul>
								<div id="chartContainer" style="height: 370px; width: 100%;">
								<?php

include "DBConnection.php";

// Query to join the tables and retrieve the required attributes
$query = "SELECT c.price, c.pname, c.pbrand, p.added_on
FROM tbl_checkout c
JOIN tbl_payment p
ON c.pay_id = p.pay_id
WHERE p.added_on >= DATE_SUB(NOW(), INTERVAL 1 YEAR)";

// Execute the query
$result = mysqli_query($conn, $query);

// Initialize an array to store data points for the chart
$dataPoints = array();

// Initialize variables to store highest and lowest sales
$highestSales = 0;
$lowestSales = PHP_INT_MAX;
$highestSalesProduct = '';
$lowestSalesProduct = '';

// Loop through the query results and add data points to the array
while ($row = mysqli_fetch_assoc($result)) {
$quarter = ceil(date('n', strtotime($row['added_on'])) / 3); // Calculate the quarter of the year
$productName = $row["pname"].' - Q'.$quarter;
$price = $row["price"];
$brand = $row["pbrand"];
// Update highest and lowest sales if necessary
if ($price > $highestSales) {
    $highestSales = $price;
    $highestSalesProduct = $productName;
}
if ($price < $lowestSales) {
    $lowestSales = $price;
    $lowestSalesProduct = $productName;
}

$dataPoints[] = array(
    "label" => $productName,
    "y" => $price,
    "brand" => $brand
);
}

// Add data points for highest and lowest sales to the chart
$dataPoints[] = array(
"label" => "Product with highest sales",
"y" => $highestSales,
"brand" => $highestSalesProduct
);
$dataPoints[] = array(
"label" => "Product with lowest sales",
"y" => $lowestSales,
"brand" => $lowestSalesProduct
);

// Encode the data points array as JSON
$dataPoints = json_encode($dataPoints, JSON_NUMERIC_CHECK);

// HTML code for the chart container
echo '<div id="chartContainer" style="height: 370px; width: 100%;"></div>';

// JavaScript code to render the chart
echo '<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>';
echo '<script>';
echo 'window.onload = function () {';
echo ' var chart = new CanvasJS.Chart("chartContainer", {';
echo ' animationEnabled: true,';
echo ' exportEnabled: true,';
echo ' theme: "light1",';
echo ' title:{';
echo ' text: "Sales Chart"';
echo ' },';
echo ' axisX:{';
echo ' title: "Product Name and Quarter"';
echo ' },';
echo ' axisY:{';
echo ' title: "Price",';
echo ' includeZero: true';
echo ' },';
echo ' data: [{';
echo ' type: "column",';
echo ' dataPoints: ' . $dataPoints . '';
echo ' }]';
echo ' });';
echo ' chart.render();';
echo '}';
echo '</script>';

mysqli_close($conn);
?>


			    					<li>10Gb Bandwidth Monthly</li>
			    					<li>2 Email Account</li>
			    					<li>Unlimited Sub Domains</li>
			    				</ul>
		    				</div>
		    			</div>
		    		    <div class="price-selet pric-clr1">
		    			   	 <a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
		    			</div>
		    		</div>
</div>
	    		<!-- </div> 
	    		<div class="col-md-4 price-grid">
	    			<div class="price-block">
		    			<div class="price-gd-top pric-clr2">
		    				<h4>Professional</h4>
		    				<h3><span class="usa-dollar">$</span> 10<span class="per-month">/mon</span></h3>
		    				<h5>Free for 2 months</h5>
		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<ul>
			    					<li>5Gb Disk</li>
			    					<li>50Gb Bandwidth Monthly</li>
			    					<li>5 Email Account</li>
			    					<li>Unlimited Sub Domains</li>
			    				</ul>
		    				</div>
		    			</div>
		    		    <div class="price-selet pric-clr2">
		    			   	 <a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
		    			</div>
		    		</div>
	    		</div>
	    		<div class="col-md-4 price-grid">
	    			<div class="price-block">
		    			<div class="price-gd-top pric-clr3">
		    				<h4>Premium</h4>
		    				<h3><span class="usa-dollar">$</span> 12<span class="per-month">/mon</span></h3>
		    				<h5>Free for 9 months</h5>
		    			</div>
		    			<div class="price-gd-bottom">
		    				<div class="price-list">
			    				<ul>
			    					<li>5Gb Disk</li>
			    					<li>50Gb Bandwidth Monthly</li>
			    					<li>10 Email Account</li>
			    					<li>Unlimited Sub Domains</li>
			    				</ul>
		    				</div>
		    			</div>
		    		    <div class="price-selet pric-clr3">
		    			   	 <a class="popup-with-zoom-anim" href="#small-dialog">Select Plan</a>
		    			</div>
		    		</div>
	    		</div> -->
    	  <div class="clearfix"> </div>
    	  </div>
   </div>
</div>
<!--inner block end here-->
<!--pop-up-grid-->
				                 <div id="popup">
								 <div id="small-dialog" class="mfp-hide">
									<div class="pop_up">
									 	<div class="payment-online-form-left">
											<form>
												<h4><span class="shoppong-pay-1"> </span>Shipping Details</h4>
												<ul>
													<li><input class="text-box-dark" type="text" value="First Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'First Name';}"></li>
													<li><input class="text-box-dark" type="text" value="Last Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Last Name';}"></li>
												</ul>
												<ul>
													<li><input class="text-box-dark" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}"></li>
													<li><input class="text-box-dark" type="text" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"></li>
												</ul>
												<ul>
													<li><input class="text-box-dark" type="text" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}"></li>
													<li><input class="text-box-dark" type="text" value="Pin Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pin Code';}"></li>
													
												</ul>
												<div class="clear"></div>
												<h4 class="paymenthead"><span class="payment"></span>Payment Details</h4>
												<div class="clear"></div>										
												<ul>
													<li><input class="text-box-dark" type="text" value="Card Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Card Number';}"></li>
													<li><input class="text-box-dark" type="text" value="Name on card" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name on card';}"></li>
												
												</ul>
												<ul>
													<li><input class="text-box-light hasDatepicker" type="text" id="datepicker" value="Expiration Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Expiration Date';}"><em class="pay-date"> </em></li>
													<li><input class="text-box-dark" type="text" value="Security Code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Security Code';}"></li>
												
												</ul>
												<ul class="payment-sendbtns">
													<li><input type="reset" value="Reset"></li>
													<li><a href="#" class="order">Process order</a></li>
												</ul>
												<div class="clear"></div>
											</form>
										</div>
						  			</div>
								</div>
								</div>
								
<!--pop-up-grid-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a href="index.php"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
		        <!-- <li><a href="#"><i class="fa fa-cogs"></i><span>Components</span><span class="fa fa-angle-right" style="float: right"></span></a> -->
		          <!-- <ul>
		            <li><a href="grids.html">Grids</a></li>
		            <li><a href="portlet.html">Portlets</a></li>		            
		          </ul> -->
		        </li>
		        <!-- <li id="menu-comunicacao" ><a href="#"><i class="fa fa-book nav_icon"></i><span>Element</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-comunicacao-sub" >
		            <li id="menu-mensagens" style="width: 120px" ><a href="buttons.html">Buttons</a>		              
		            </li>
		            <li id="menu-arquivos" ><a href="typography.html">Typography</a></li>
		             <li id="menu-arquivos" ><a href="icons.html">Icons</a></li>
		          </ul>
		        </li>
		          <li><a href="maps.html"><i class="fa fa-map-marker"></i><span>Maps</span></a></li>
		        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><span class="fa fa-angle-right" style="float: right"></span></a>
		          <ul id="menu-academico-sub" >
		          	 <li id="menu-academico-boletim" ><a href="login.html">Login</a></li>
		            <li id="menu-academico-avaliacoes" ><a href="signup.html">Sign Up</a></li>		           
		          </ul>
		        </li>
		         -->
		        <!-- <li><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Charts</span></a></li>
		        <li><a href="#"><i class="fa fa-envelope"></i><span>Mailbox</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="inbox.html">Inbox</a></li>
			            <li id="menu-academico-boletim" ><a href="inbox-details.html">Compose email</a></li>
		             </ul>
		        </li>
		         <li><a href="#"><i class="fa fa-cog"></i><span>System</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="404.html">404</a></li>
			            <li id="menu-academico-boletim" ><a href="blank.html">Blank</a></li>
		             </ul>
		         </li>
		         <li><a href="#"><i class="fa fa-shopping-cart"></i><span>E-Commerce</span><span class="fa fa-angle-right" style="float: right"></span></a>
		         	<ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="product.html">Product</a></li>
			            <li id="menu-academico-boletim" ><a href="price.html">Price</a></li>
		             </ul>
		         </li> -->
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<!--slide bar menu end here-->
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>
<!--scrolling js-->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!--//scrolling js-->
<script src="js/bootstrap.js"> </script>
<!-- mother grid end here-->
</body>
</html>


                      
						
