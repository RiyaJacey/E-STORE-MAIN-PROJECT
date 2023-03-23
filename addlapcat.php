<?php
require_once("DBConnection.php");
session_start();
global $row;
if(!isset($_SESSION['name'])){
header("Location: ../login/signin11.php");
}
if (isset($_GET['logout'])) {
	if($_SESSION["name"]) {
  session_destroy();
  header("Location:../login/logout.php");
  exit;
	}
}
?>
                                                    
<?php
$statusMsg = '';

// File upload path
$targetDir = "images1/";
$targetDir2="images2/";//for full cart view
$user_id = $_SESSION['loginId'];

if(isset($_POST['submit']))
{ 

$lcat_name = $_POST['lcat_name'];


  $query = mysqli_query($conn,"INSERT INTO tbl_lapcategory(lcat_name) VALUES('$lcat_name')");
  
//   $query1 = mysqli_query($conn,"SELECT regId from tbl_registration WHERE name='".$name."'");
// if($query1===FALSE)
// {
//   die(mysqli_error($conn));
// }
// $eid = mysqli_fetch_assoc($query1);

if($query){


    echo 'Registration successful!!';
    $_SESSION['sess_user'] = $name;
    // $_SESSION['sess_eid'] = $eid['id'];
    header("Location:../login/signin11.php");
    exit;
}
else{
    echo "Query Error : " . " INSERT INTO tbl_phonecategory(pcat_name) VALUES('$pcat_name') " . "<br>" . mysqli_error($conn);
    echo "<br>";
    // echo "Query Error : " . "SELECT regId from tbl_registration WHERE name='".$name."'" . "<br>" . mysqli_error($conn);
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>

.nav-link {
  white-space: normal;
 
}
.navbar
{
  height:80px;

}

.container-fluid
{
    position:relative;
}

        </style>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        



        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

  <style>
    h1 {
      text-align: center;
      font-size: 2.5em;
      font-weight: bold;
      padding-top: 1em;
      margin-bottom: -0.5em;
    }

    form {
      padding: 40px;
    }

    input,
    textarea {
      margin: 5px;
      font-size: 1.1em !important;
      outline: none;
    }

    label {
      margin-top: 2em;
      font-size: 1.1em !important;
    }

    label.form-check-label {
      margin-top: 0px;
    }

    #err {
      display: none;
      padding: 1.5em;
      padding-left: 4em;
      font-size: 1.2em;
      font-weight: bold;
      margin-top: 1em;
    }

    table{
      width: 90% !important;
      margin: 1.5rem auto !important;
      font-size: 1.1em !important;
    }

    .error{
      color: #FF0000;
    }
  </style>


</head>

<body>
  <!--Navbar-->
  
<div class="content">
<div class="clearfix">

<?php 
include "navbar.php";
 ?>
 </div>
  <h1>ADD LAPTOP CATEGORY</h1>

  <div class="container">
    <div class="alert alert-danger" id="err" role="alert">
    </div>
  
    <form method="POST" enctype="multipart/form-data">
      
  
      <label><b>ADD PRODUCT DETAILS HERE...</b></label>
      <!-- error message if type of absence isn't selected -->
      
      <table>
        
    <tr><td>
    <div class="form-check">
      <label for="lcat_name"><b>Laptop Category</b></label></td><td>
      <input type="text" name="lcat_name" id="lcat_name" >
      
  </div>
</td></tr>
</table>
  
  
      <center><input type="submit" name="submit" value="ADD Category" class="btn btn-success"></center>
    </form>
  
    
  </div>
  <div class="clearfix">

<?php 
include "sidebar.php";
 ?>
 </div>

 <div class="clearfix">
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php 

include "footer.php";
 ?>
 </div>
        </div>

</body>

</html>
<?php
//}

ini_set('display_errors', true);
error_reporting(E_ALL);
?>

