<?php
require_once("DBConnection.php");
include "myphpscript.php";
session_start();
global $row;
if(!isset($_SESSION['name'])){
header("Location: signin11.php");
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
    $a=$_REQUEST['pcat_id'];
$pimage=$_FILES["pimage"]["name"];
$pname = $_POST['pname'];
$pbrand = $_POST['psbrand'];
$pscolour = $_POST['pscolour'];
$pram = $_POST['psram'];
$pstorage = $_POST['psstorage'];
$processor = $_POST['psprocessor'];
$desp = $_POST['desp'];
$price = $_POST['price'];
$offer = $_POST['offer'];
$tprice = $_POST['tprice'];
$targetFilePath = $targetDir . $pimage;
$targetFilePath2 = $targetDir2 . $pimage;//for full cart view





move_uploaded_file($_FILES["pimage"]["tmp_name"],$targetFilePath);
copy($targetDir.$pimage,$targetFilePath2);

  $query = mysqli_query($conn,"INSERT INTO tbl_productdetail(loginId,pimage,pname,pbrand,pcolour,pram,pstorage,processor,desp,price,offer,tprice) VALUES('$user_id','$pimage','$pname','$pbrand','$pscolour', '$pram','$pstorage','$processor', '$desp','$price','$offer','$tprice')");
  
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
    header("Location:signin11.php");
    exit;
}
else{
    echo "Query Error : " . "  INSERT INTO tbl_productdetail(loginId,pimage,pname,pbrand,pcolour,pram,pstorage,processor,desp,price,offer,tprice) VALUES('$user_id','$pimage','$pname','$pbrand','$pcolour', '$pram','$pstorage','$processor', '$desp','$price','$offer','$tprice')" . "<br>" . mysqli_error($conn);
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

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
  <h1>Add Phones</h1>

  <div class="container">
    <div class="alert alert-danger" id="err" role="alert">
    </div>
  
    <form method="POST" enctype="multipart/form-data">
      
  
      <label><b>ADD PRODUCT DETAILS HERE...</b></label>
      <!-- error message if type of absence isn't selected -->
      
      <table>
      <tr><td>
        
        <div class="form-check">
      <label for="psbrand"><b>Brand</b></label></td><td>
      <select name="psbrand" id="psbrand" onchange="fn()">
          <option value="">Choose An Option</option>
          <?php
          $query=mysqli_query($conn,"select * from tbl_phonecategory ");
          while($row=mysqli_fetch_array($query))
          {
              // Use the pcat_name column value as the option value
              echo '<option value="' . $row['pcat_id'] . '"';
              if (isset($_POST['psbrand']) && $_POST['psbrand'] == $row['pcat_id']) {
                echo ' selected';
              }
              echo '>' . $row['pcat_name'] . '</option>';
          }
          ?>
        </select>
      
  </div>
      </td></tr>
      <tr><td>
      <div class="form-check">
        <label for="pname"><b>Name</b></label></td><td>
        <input type="text" name="pname" required onchange="Validaddress()">
        <span id="msg11" style="color:red;"></span>
                        <script>
                        function Validaddress() 
                        {
                        var val = document.getElementById('add').value;
                          if (!val.match(/^[A-Za-z]/))
                           {
                            document.getElementById('msg11').innerHTML="Enter address in correct format";
                                  document.getElementById('add').value = "";
                                    return false;
                           }
                            document.getElementById('msg11').innerHTML=" ";
                          return true;
                        }
                       </script>
  
      </div>
    </td></tr>
        <tr><td>
        <div class="form-check">
        <label for="pimage"><b>Upload image here</b></label></td><td>
        <input type="file" name="pimage" id="fileUpload" accept="image/*" required>
               <script type="text/javascript">
                 function getFilePath(){
                   $('input[type=file]').change(function () {
                    var filePath=$('#fileUpload').val(); 
     });
}
</script>
  
        
      </div>
    </td></tr>
    
      
      <tr><td>
      <div class="form-check">
        <label for="pscolour"><b>Colour</b></label></td><td>
        <!-- <input type="text" name="pcolour"> -->
        <select name="pscolour" id="pscolour">
          <option value="">Choose An Option</option>
          
        </select>
        <script>

$(document).ready(function() {
$('#psbrand').on('change', function() {

var bid = this.value;
$.ajax({
 url: "get_subcat.php",
type: "POST",
data: {
bid: bid
            },
            cache: false,
            success: function(dataResult){ 
                $("#pscolour").html(dataResult);
            }
        });
    
    
     });
    });
</script>
        
      </div>
    </td></tr>
      <tr><td>
      <div class="form-check">
        <label for="psram"><b>Ram</b></label></td><td>
        <!-- <input type="text" name="pram"> -->
        <select name="psram" id="psram">
          <option value="">Choose An Option</option>
          
      </select>
      <script>

$(document).ready(function() {
$('#psbrand').on('change', function() {

var bid = this.value;
$.ajax({
 url: "get_ram.php",
type: "POST",
data: {
bid: bid
            },
            cache: false,
            success: function(dataResult){ 
                $("#psram").html(dataResult);
            }
        });
    
    
     });
    });
</script>
      </div>
    </td></tr>
      <tr><td>
      <div class="form-check">
        <label for="psstorage"><b>Storage</b></label></td><td>
        <!-- <input type="text" name="pstorage"> -->
        <select name="psstorage" id="psstorage">
          <option value="">Choose An Option</option>
          
      </select>
      <script>

$(document).ready(function() {
$('#psbrand').on('change', function() {

var bid = this.value;
$.ajax({
 url: "get_storage.php",
type: "POST",
data: {
bid: bid
            },
            cache: false,
            success: function(dataResult){ 
                $("#psstorage").html(dataResult);
            }
        });
    
    
     });
    });
</script>
      </div>
    </td></tr>
      <tr><td>
      <div class="form-check">
        <label for="psprocessor"><b>Processor</b></label></td><td>
        <!-- <input type="text" name="processor"> -->
        <select name="psprocessor" id="psprocessor">
          <option value="">Choose An Option</option>
          
      </select>
      <script>

$(document).ready(function() {
$('#psbrand').on('change', function() {

var bid = this.value;
$.ajax({
 url: "get_processor.php",
type: "POST",
data: {
bid: bid
            },
            cache: false,
            success: function(dataResult){ 
                $("#psprocessor").html(dataResult);
            }
        });
    
    
     });
    });
</script>
      </div>
    </td></tr>
      <tr><td>
      <div class="form-check">
        <label for="desp"><b>Description</b></label></td><td>
        <input type="text" name="desp">
  
    </div>
    
    <tr><td>
    <div class="form-check">
        <label for="price"><b>Price</b></label></td><td>
        <input type="number" name="price" id="price">
  
      </div>
    </td></tr>
      <tr><td>
      <div class="form-check">
        <label for="offer"><b>Offer</b></label></td><td>
        <input type="number" name="offer" id="offer" onmouseout="fprice()">
         
    </div>
  </td></tr>
    <tr><td>
    <div class="form-check">
      <label for="tprice"><b>Total Price</b></label></td><td>
      <input type="number" name="tprice" id="tprice" >
      <script>
          function fprice()
          {
             var x=Number(document.getElementById("price").value);
             var y=Number(document.getElementById("offer").value);
            var z=Number(x-(x*(y/100)));
            document.getElementById("tprice").value=Number(z);
          }
          </script>
  </div>
</td></tr>
</table>
  
  
      <center><input type="submit" name="submit" value="ADD PRODUCT" class="btn btn-success"></center>
      
    </form>
  
    
  </div>
  <div class="clearfix">

<?php 
include "sidebar.php";
 ?>
 </div>

 <div class="clearfix">

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

