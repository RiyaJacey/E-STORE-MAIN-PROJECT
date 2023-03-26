<?php
require_once("DBConnection.php");
session_start();
global $row;
// if(!isset($_SESSION["sess_user"])){
//  header("Location: signin11.php");
// }
// else
// {
?>
                                                    
<?php
$statusMsg = '';

// File upload path
$targetDir = "images2/";
if(isset($_POST['submit']))
{ 

$lname = $_POST['lname'];
$lbrand = $_POST['lbrand'];
$lcolour = $_POST['lcolour'];
$lram = $_POST['lram'];
$Harddisk= $_POST['Harddisk'];
$lprocessor = $_POST['lprocessor'];
$screensize = $_POST['screensize'];
$os= $_POST['os'];
$warranty= $_POST['warranty'];
$ldesp= $_POST['ldesp'];
$lprice = $_POST['lprice'];
$loffer = $_POST['loffer'];
$ltprice = $_POST['ltprice'];
//$limage1=$_FILES["limage"]["name"];
$query = mysqli_query($conn,"INSERT INTO tbl_laptop(`lname`, `lbrand`, `lcolour`, `lram`, `Harddisk`, `lprocessor`, `screensize`, `os`, `warranty`, `ldesp`, `lprice`, `loffer`, `ltprice`) VALUES ('$lname','$lbrand','$lcolour','$lram','$Harddisk','$lprocessor','$screensize','$os','$warranty','$ldesp','$lprice','$loffer','$ltprice')");
$query1 = mysqli_query($conn,"SELECT * from tbl_laptop WHERE lname='".$lname."'");
while($row=mysqli_fetch_array($query1))
{
$a=$row['lid'];

// $targetFilePath = $targetDir . $limage;
// move_uploaded_file($_FILES["limage"]["tmp_name"],$targetFilePath);
$limages = $_FILES["limage"]["name"];
foreach($limages as $key=>$value){
   $limage = $limages[$key];
   $limage2=$limages[0];
   $targetFilePath = $targetDir . $limage;
   move_uploaded_file($_FILES["limage"]["tmp_name"][$key], $targetFilePath);
   $query = mysqli_query($conn,"INSERT INTO tbl_sublaptop(`lapimage`, `lid`) VALUES ('$limage','$a')");
   
}
$query = mysqli_query($conn, "UPDATE tbl_laptop SET `limage`='$limage2' WHERE lid='$a'");

}
  //$query1 = mysqli_query($conn,"SELECT regId from tbl_registration WHERE name='".$name."'");
// if($query1===FALSE)
// {
//   die(mysqli_error($conn));
// }
// $eid = mysqli_fetch_assoc($query1);

if($query){


    echo 'Registration successful!!';
    // $_SESSION['sess_user'] = $name;
    // $_SESSION['sess_eid'] = $eid['id'];
    header("Location:signin11.php");
    exit;
}
else{
    echo "Query Error : " . "  INSERT INTO tbl_laptop(`limage`, `lname`, `lbrand`, `lcolour`, `lram`, `Harddisk`, `lprocessor`, `screensize`, `os`, `warranty`, `ldesp`, `lprice`, `loffer`, `ltprice`) VALUES('$limage','$lname','$lbrand','$lcolour','$lram','$Harddisk','$lprocessor','$screensize','$os','$warranty','$ldesp','$lprice','$loffer','$ltprice')" . "<br>" . mysqli_error($conn);
    echo "<br>";
    // echo "Query Error : " . "SELECT regId from tbl_registration WHERE name='".$name."'" . "<br>" . mysqli_error($conn);
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <title></title>
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
  <nav class="navbar header-nav navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">E-STORE VENDOR PANEL</a>
      <ul class="nav justify-content-end">
           
            <li class="nav-item">
                <a class="nav-link" href="myhistory.php" style="color:white;">My Leave History</a>
            </li>
            <li class="nav-item">
            <button id="logout" onclick="window.location.href='logout.php';">Logout</button>
            </li>
            </ul>

      
    </div>
  </nav>


  <h1>Add laptops</h1>

  <div class="container">
    <div class="alert alert-danger" id="err" role="alert">
    </div>
  
    <form method="POST" enctype="multipart/form-data">
      
  
      <label><b>ADD PRODUCT DETAILS HERE...</b></label>
      <!-- error message if type of absence isn't selected -->
      
      <table>
        <tr><td>
        <div class="form-check">
        <label for="limage"><b>Upload image here</b></label></td><td>
        <input type="file" name="limage[]" id="fileUpload" multiple>
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
        <label for="lname"><b>Name</b></label></td><td>
        <input type="text" name="lname">
  
      </div>
    </td></tr>
      <tr><td>
        
      <div class="form-check">
        <label for="lbrand"><b>Brand</b></label></td><td>
        <!-- <input type="text" name="lbrand"> -->
        <select name="lbrand">
        <option value="">Choose An Option</option>
          <option value="samsung">Samsung</option>
          <option value="lenovo">Lenovo</option>
          <option value="dell">Dell</option>
        </select>
  
  
      </div>
    </td></tr>
      <tr><td>
      <div class="form-check">
        <label for="lcolour"><b>Colour</b></label></td><td>
        <!-- <input type="text" name="lcolour"> -->
        <select name="lcolour">
        <option value="">Choose An Option</option>
          <option value="black">Black</option>
          <option value="white">White</option>
          <option value="grey">Grey</option>
        </select>

        
      </div>
    </td></tr>
      <tr><td>
      <div class="form-check">
        <label for="lram"><b>Ram</b></label></td><td>
        <!-- <input type="text" name="lram"> -->
        <select name="lram">
        <option value="">Choose An Option</option>

          <option value="8GB">8GB</option>
          <option value="16GB">16GB</option>
          <option value="32GB">32GB</option>
          <option value="64GB">64GB</option>

        </select>
      </div>
    </td></tr>
      <tr><td>
      <div class="form-check">
        <label for="Harddisk"><b>HardDisk</b></label></td><td>
        <!-- <input type="text" name="Harddisk"> -->
        <select name="Harddisk">
        <option value="">Choose An Option</option>

          <option value="500GB">500GB</option>
          <option value="1TB">ITB</option>
          <option value="2TB">2TB</option>

        </select>
  
      </div>
    </td></tr>
      <tr><td>
      <div class="form-check">
        <label for="lprocessor"><b>Processor</b></label></td><td>
        <!-- <input type="text" name="lprocessor"> -->
        <select name="lprocessor">
        <option value="">Choose An Option</option>

          <option value="Samsung Exynos">Samsung Exynos</option>
          <option value="Qualcomm SnapDragon">Qualcomm SnapDragon</option>
          <option value="intel Core i3">intel Core i3</option>
          <option value="intel Core i7">intel Core i5</option>



        </select>
  
      </div>
    </td></tr>

    <tr><td>
      <div class="form-check">
        <label for="screensize"><b>Screen Size</b></label></td><td>
        <!-- <input type="text" name="screensize"> -->
        <select name="screensize">
        <option value="">Choose An Option</option>

          <option value="10 inches(25cm screen diagnol)">10 inches(25cm screen diagnol)</option>
          <option value="11 inches(28cm screen diagnol)">11 inches(28cm screen diagnol) </option>
          <option value="12 inches(30cm screen diagnol)">12 inches(30cm screen diagnol)</option>
          <option value="13 inches(33cm screen diagnol)">13 inches(33cm screen diagnol)</option>
          <option value="14 inches(35cm screen diagnol)">14 inches(35cm screen diagnol)</option>
          <option value="15 inches(38cm screen diagnol)">15 inches(38cm screen diagnol)</option>
        </select>
      </div>
    </td></tr>
    <tr><td>
      <div class="form-check">
        <label for="os"><b>os</b></label></td><td>
        <!-- <input type="text" name="os"> -->
        <select name="os">
        <option value="">Choose An Option</option>

          <option value="Microsoft Windows">Microsoft Windows</option>
          <option value="Windows 10">Windows 10 </option>
          <option value="Linux">Linux</option>
          <option value="ChromeOS">ChromeOS</option>



        </select>
      </div>
    </td></tr>

    <tr><td>
      <div class="form-check">
        <label for="warranty"><b>Warranty</b></label></td><td>
        <input type="number" name="warranty">
  
      </div>
    </td></tr>

      <tr><td>
      <div class="form-check">
        <label for="ldesp"><b>Description</b></label></td><td>
        <input type="text" name="ldesp">
  
    </div>
    
    <tr><td>
    <div class="form-check">
        <label for="lprice"><b>Price</b></label></td><td>
        <input type="number" name="lprice" id="price">
  
      </div>
    </td></tr>
      <tr><td>
      <div class="form-check">
        <label for="loffer"><b>Offer</b></label></td><td>
        <input type="number" name="loffer" id="offer" onmouseout="fprice()">
  
    </div>
  </td></tr>
    <tr><td>
    <div class="form-check">
      <label for="ltprice"><b>Total Price</b></label></td><td>
      <input type="number" name="ltprice" id="tprice">
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

  <footer class="footer navbar navbar-expand-lg navbar-light bg-light" style="color:white;">
  </footer>

</body>

</html>
<?php
//}

ini_set('display_errors', true);
error_reporting(E_ALL);
?>

