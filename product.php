
<?php
session_start();
include "DBConnection.php";
// if(!isset($_SESSION['name']))
// {
// 	header('location:../login/signin11.php');
// }
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Electro Store Ecommerce Category Bootstrap Responsive Web Template | Electronics :: w3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

</head>

<body>

	<!-- top-header -->
	

	<!-- Button trigger modal(select-location) -->
	
	<!-- //shop locator (popup) -->

	<!-- modals -->
	<!-- log in -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-center">Log In</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<label class="col-form-label">Username</label>
							<input type="text" class="form-control" placeholder=" " name="Name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="Password" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Log in">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
								<label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
							</div>
						</div>
						<p class="text-center dont-do mt-3">Don't have an account?
							<a href="#" data-toggle="modal" data-target="#exampleModal2">
								Register Now</a>
						</p>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- register -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Register</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="form-group">
							<label class="col-form-label">Your Name</label>
							<input type="text" class="form-control" placeholder=" " name="Name" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Email</label>
							<input type="email" class="form-control" placeholder=" " name="Email" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Password</label>
							<input type="password" class="form-control" placeholder=" " name="Password" id="password1" required="">
						</div>
						<div class="form-group">
							<label class="col-form-label">Confirm Password</label>
							<input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2" required="">
						</div>
						<div class="right-w3l">
							<input type="submit" class="form-control" value="Register">
						</div>
						<div class="sub-w3l">
							<div class="custom-control custom-checkbox mr-sm-2">
								<input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
								<label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms & Conditions</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3 logo_agile">
					<h1 class="text-center">
						<a href="index.html" class="font-weight-bold font-italic">
							<img src="images/logo2.png" alt=" " class="img-fluid">Electro Store
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
					<?php
$count=1;
$sel_query="SELECT * from tbl_productdetail";

$result = mysqli_query($conn,$sel_query);
$row = mysqli_fetch_assoc($result);
	if($row['status']==0)
	{
 $a= '../login/images1/'.$row["pimage"];
?>
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="#" method="post">
								<input class="form-control mr-sm-2" type="search" name="my_input" placeholder="Search" aria-label="Search" required>
								<?php 
								// $searchTerm = mysqli_real_escape_string($conn, $_POST['my_input']); // sanitize the input
								// $sql = "SELECT * FROM tbl_productdetail WHERE name LIKE '%$searchTerm%'";
								// $result = mysqli_query($conn, $sql);
								// if (mysqli_num_rows($result) > 0) {
								// 	// output data of each row
								// 	while($row = mysqli_fetch_assoc($result)) {}}}

?>
								<button class="btn my-2 my-sm-0" type="submit" name="search">Search</button>
							</form>
						</div>
						<!-- //search -->
						<!-- cart details -->
						<!-- <button><a href="../login/vcart.php?pid=<php echo $row['pid']?>"><b><i>MY CART</i></b></a></button> -->

						<button><a href="../login/vcart.php">view cart</a></button>&nbsp;&nbsp;
						<button><a href="userindex.php">back</a></button>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	
	<!-- //navigation -->

	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.html">Home</a>
						<i>|</i>
					</li>
					<li>Electronics</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>M</span>obiles
				<span>&</span>
				<span>C</span>omputers</h3>
			<!-- //tittle heading -->
        

			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
													
							<?php
							$count=1;
							if(isset($_POST['search']))
							{
								$searchTerm = mysqli_real_escape_string($conn, $_POST['my_input']); // sanitize the input
								 $sql = "SELECT * FROM tbl_productdetail WHERE pbrand LIKE '%$searchTerm%'";
								 $result = mysqli_query($conn, $sql);
							}
							if(isset($_POST['oppo']))
							{
								 $sql = "SELECT * FROM tbl_productdetail WHERE pbrand LIKE 'oppo'";
								 $result = mysqli_query($conn, $sql);
							}
							if(isset($_POST['samsung']))
							{
								 $sql = "SELECT * FROM tbl_productdetail WHERE pbrand LIKE 'samsung'";
								 $result = mysqli_query($conn, $sql);
							}
							if(isset($_POST['lenovo']))
							{
								 $sql = "SELECT * FROM tbl_productdetail WHERE pbrand LIKE 'lenovo'";
								 $result = mysqli_query($conn, $sql);
							}
							if(!isset($_POST['search']) && !isset($_POST['oppo']) && !isset($_POST['samsung']) && !isset($_POST['lenovo'])) {
								$sel_query = "SELECT * from tbl_productdetail";
								$result = mysqli_query($conn, $sel_query);
							}

while($row = mysqli_fetch_assoc($result)) {
	if($row['status']==0)
	{
 $a= '../login/images1/'.$row["pimage"];
$name = $row['pbrand'];
$color=$row['pcolour'];

?>
								<div class="col-md-4 product-men">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
                                          <img src="<?php echo $a ?> " style="width: 150px; height:250px;">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													
												<a href="single.php?pid=<?php echo $row['pid']?>" class="link-product-add-cart">Quick View</a>

													<!-- <a href="../web/single.html" class="link-product-add-cart">Quick View</a> -->
												</div>
																							</div>
										</div>
										<?php
										$sql12 = "SELECT pname FROM tbl_checkout WHERE status = 1";
										$result12 = mysqli_query($conn, $sql12);
										while($row12 = mysqli_fetch_assoc($result12)){
										$a=$row12['pname'];
										if($row['pname']==$a)
										{
								       ?>
										<span class="product-new-top">Hot Selling Product</span>
										<?php
										}}
										?>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="single.html">
											<?php  
        $sql11 = "SELECT pcat_name FROM tbl_phonecategory WHERE pcat_id = $name";
        $result11 = mysqli_query($conn, $sql11);
        $row11 = mysqli_fetch_assoc($result11);
        echo $row11['pcat_name']; ?>
                                       <?php  
        $sql13= "SELECT pscolour FROM tbl_phonesubcategory WHERE psc_id = $color";
        $result13 = mysqli_query($conn, $sql13);
        $row13 = mysqli_fetch_assoc($result13);
        echo $row13['pscolour']; ?></a>
									  <h3> <?php echo $row["pname"]; ?></h3>
									   <!-- <a href="../login/cart.php?pid=<php echo $row['pid']?>">ADD TO CART</a> -->
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price">$<?php echo $row["tprice"]; ?></span>
												<del>$<?php echo $row["price"]; ?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="#" method="post">
													<fieldset>
														
													    <input type="hidden" name="cmd" value="_cart" />
														<input type="hidden" name="add" value="1" />
														<input type="hidden" name="business" value=" " />
														<input type="hidden" name="item_name" value="Samsung Galaxy J7" />
														<input type="hidden" name="amount" value="200.00" />
														<input type="hidden" name="discount_amount" value="1.00" />
														<input type="hidden" name="currency_code" value="USD" />
														<input type="hidden" name="return" value=" " />				
														<input type="hidden" name="cancel_return" value=" " />
														<button class="button btn">
														
															<a href="../login/cart.php?pid=<?php echo $row['pid']?>">ADD TO CART</a>  </button>

														<!-- <button class="button btn"><a href="../login/cart.php?pid=<php echo $row['pid']?>">ADD TO CART</a></button> -->
														<!-- <input type="submit" name="submit" value="Add to cart" class="button btn" /> -->
													</fieldset>
												</form>
											</div>

										</div>
									</div>
								</div>
            <?php  }} }?>                  
								
								
							</div>
						</div>
						
				
						<!-- //fourth section -->
					</div>
				</div>
				<!-- //product left -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Brand</h3>
							
							<div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
<nav class="yamm megamenu-horizontal" role="navigation">
	<form method="POST">
<li><button style="height:50px;width:200px" name="oppo" type="submit"><h3>oppo</h3></button></li>
<li><button style="height:50px;width:200px" name="samsung" type="submit"><h3>Samsung</h3></button></li>
<li><button style="height:50px;width:200px" name="lenovo" type="submit"><h3>Lenovo</h3></button></li>
	</form>

</nav>
</div>
						</div>
						<!-- ram -->
						
						<!-- //arrivals -->
					</div>
				<!-- product right -->
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->

	<!-- middle section -->
	<div class="join-w3l1 py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="join-agile text-left p-4">
						<div class="row">
							<div class="col-sm-7 offer-name">
								<h6>Smooth, Rich & Loud Audio</h6>
								<h4 class="mt-2 mb-3">Branded Headphones</h4>
								<p>Sale up to 25% off all in store</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="images/off1.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="join-agile text-left p-4">
						<div class="row ">
							<div class="col-sm-7 offer-name">
								<h6>A Bigger Phone</h6>
								<h4 class="mt-2 mb-3">Smart Phones 5</h4>
								<p>Free shipping order over $100</p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="images/off2.png" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->

	<!-- footer -->
	<footer>
		<div class="footer-top-first">
			<div class="container py-md-5 py-sm-4 py-3">
				<!-- footer first section -->
				<h2 class="footer-top-head-w3l font-weight-bold mb-2">Electronics :</h2>
				<p class="footer-main mb-4">
					If you're considering a new laptop, looking for a powerful new car stereo or shopping for a new HDTV, we make it easy to
					find exactly what you need at a price you can afford. We offer Every Day Low Prices on TVs, laptops, cell phones, tablets
					and iPads, video games, desktop computers, cameras and camcorders, audio, video and more.</p>
				<!-- //footer first section -->
				<!-- footer second section -->
				<div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-dolly"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Free Shipping</h3>
								<p>on orders over $100</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer my-md-0 my-4">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-shipping-fast"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Fast Delivery</h3>
								<p>World Wide</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="far fa-thumbs-up"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Big Choice</h3>
								<p>of Products</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //footer second section -->
			</div>
		</div>
		<!-- footer third section -->
		<div class="w3l-middlefooter-sec">
			<div class="container py-md-5 py-sm-4 py-3">
				<div class="row footer-info w3-agileits-info">
					<!-- footer categories -->
					<div class="col-md-3 col-sm-6 footer-grids">
						<h3 class="text-white font-weight-bold mb-3">Categories</h3>
						<ul>
							<li class="mb-3">
								<a href="product.html">Mobiles </a>
							</li>
							<li class="mb-3">
								<a href="product.html">Computers</a>
							</li>
							<li class="mb-3">
								<a href="product.html">TV, Audio</a>
							</li>
							<li class="mb-3">
								<a href="product2.html">Smartphones</a>
							</li>
							<li class="mb-3">
								<a href="product.html">Washing Machines</a>
							</li>
							<li>
								<a href="product2.html">Refrigerators</a>
							</li>
						</ul>
					</div>
					<!-- //footer categories -->
					<!-- quick links -->
					<div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Quick Links</h3>
						<ul>
							<li class="mb-3">
								<a href="about.html">About Us</a>
							</li>
							<li class="mb-3">
								<a href="contact.html">Contact Us</a>
							</li>
							<li class="mb-3">
								<a href="help.html">Help</a>
							</li>
							<li class="mb-3">
								<a href="faqs.html">Faqs</a>
							</li>
							<li class="mb-3">
								<a href="terms.html">Terms of use</a>
							</li>
							<li>
								<a href="privacy.html">Privacy Policy</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Get in Touch</h3>
						<ul>
							<li class="mb-3">
								<i class="fas fa-map-marker"></i> 123 Sebastian, USA.</li>
							<li class="mb-3">
								<i class="fas fa-mobile"></i> 333 222 3333 </li>
							<li class="mb-3">
								<i class="fas fa-phone"></i> +222 11 4444 </li>
							<li class="mb-3">
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:example@mail.com"> mail 1@example.com</a>
							</li>
							<li>
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:example@mail.com"> mail 2@example.com</a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
						<!-- newsletter -->
						<h3 class="text-white font-weight-bold mb-3">Newsletter</h3>
						<p class="mb-3">Free Delivery on your first order!</p>
						<form action="#" method="post">
							<div class="form-group">
								<input type="email" class="form-control" placeholder="Email" name="email" required="">
								<input type="submit" value="Go">
							</div>
						</form>
						<!-- //newsletter -->
						<!-- social icons -->
						<div class="footer-grids  w3l-socialmk mt-3">
							<h3 class="text-white font-weight-bold mb-3">Follow Us on</h3>
							<div class="social">
								<ul>
									<li>
										<a class="icon fb" href="#">
											<i class="fab fa-facebook-f"></i>
										</a>
									</li>
									<li>
										<a class="icon tw" href="#">
											<i class="fab fa-twitter"></i>
										</a>
									</li>
									<li>
										<a class="icon gp" href="#">
											<i class="fab fa-google-plus-g"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<!-- //social icons -->
					</div>
				</div>
				<!-- //quick links -->
			</div>
		</div>
		<!-- //footer third section -->

		<!-- footer fourth section -->
		<div class="agile-sometext py-md-5 py-sm-4 py-3">
			<div class="container">
				<!-- brands -->
				<div class="sub-some">
					<h5 class="font-weight-bold mb-2">Mobile & Tablets :</h5>
					<ul>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Android Phones</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Smartphones</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Feature Phones</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Unboxed Phones</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Refurbished Phones</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2"> Tablets</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">CDMA Phones</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Value Added Services</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Sell Old</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Used Mobiles</a>
						</li>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-2">Computers :</h5>
					<ul>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Laptops </a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Printers</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Routers</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Ink & Toner Cartridges</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Monitors</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Video Games</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Unboxed & Refurbished Laptops</a>
						</li>
						<li>
							<a href="product.html" class="border-right pr-2">Assembled Desktops</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Data Cards</a>
						</li>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-2">TV, Audio & Large Appliances :</h5>
					<ul>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">TVs & DTH</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Home Theatre Systems</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Hidden Cameras & CCTVs</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Refrigerators</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Washing Machines</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2"> Air Conditioners</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Cameras</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Speakers</a>
						</li>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-2">Mobile & Laptop Accessories :</h5>
					<ul>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Headphones</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Power Banks </a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Backpacks</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Mobile Cases & Covers</a>
						</li>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Pen Drives</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">External Hard Disks</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2"> Mouse</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Smart Watches & Fitness Bands</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">MicroSD Cards</a>
						</li>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-2">Appliances :</h5>
					<ul>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Trimmers</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Hair Dryers</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Emergency Lights</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Water Purifiers </a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Electric Kettles</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Hair Straighteners</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Induction Cooktops</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Sewing Machines</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2"> Geysers</a>
						</li>
					</ul>
				</div>
				<div class="sub-some mt-4">
					<h5 class="font-weight-bold mb-2">Popular on Electro Store</h5>
					<ul>
						<li class="m-sm-1">
							<a href="product.html" class="border-right pr-2">Offers & Coupons</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Couple Watches</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Gas Stoves</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2"> Air Coolers</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Air Purifiers</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Headphones</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2"> Headsets</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Pressure Cookers</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Sandwich Makers</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Air Friers</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Irons</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">LED TV</a>
						</li>
						<li class="m-sm-1">
							<a href="product2.html" class="border-right pr-2">Sandwich Makers</a>
						</li>
					</ul>
				</div>
				<!-- //brands -->
				<!-- payment -->
				<div class="sub-some child-momu mt-4">
					<h5 class="font-weight-bold mb-3">Payment Method</h5>
					<ul>
						<li>
							<img src="images/pay2.png" alt="">
						</li>
						<li>
							<img src="images/pay5.png" alt="">
						</li>
						<li>
							<img src="images/pay1.png" alt="">
						</li>
						<li>
							<img src="images/pay4.png" alt="">
						</li>
						<li>
							<img src="images/pay6.png" alt="">
						</li>
						<li>
							<img src="images/pay3.png" alt="">
						</li>
						<li>
							<img src="images/pay7.png" alt="">
						</li>
						<li>
							<img src="images/pay8.png" alt="">
						</li>
						<li>
							<img src="images/pay9.png" alt="">
						</li>
					</ul>
				</div>
				<!-- //payment -->
			</div>
		</div>
		<!-- //footer fourth section (text) -->
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right py-3">
		<div class="container">
			<p class="text-center text-white">© 2018 Electro Store. All rights reserved | Design by
				<a href="http://w3layouts.com"> W3layouts.</a>
			</p>
		</div>
	</div>
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
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
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->

</body>

</html>