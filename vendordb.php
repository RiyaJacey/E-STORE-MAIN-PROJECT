<?php
require_once("DBConnection.php");
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
$pimage=$_FILES["pimage"]["name"];
$pname = $_POST['pname'];
$pbrand = $_POST['pbrand'];
$pcolour = $_POST['pcolour'];
$pram = $_POST['pram'];
$pstorage = $_POST['pstorage'];
$processor = $_POST['processor'];
$desp = $_POST['desp'];
$price = $_POST['price'];
$offer = $_POST['offer'];
$tprice = $_POST['tprice'];
$targetFilePath = $targetDir . $pimage;
$targetFilePath2 = $targetDir2 . $pimage;//for full cart view





move_uploaded_file($_FILES["pimage"]["tmp_name"],$targetFilePath);
copy($targetDir.$pimage,$targetFilePath2);

  $query = mysqli_query($conn,"INSERT INTO tbl_productdetail(loginId,pimage,pname,pbrand,pcolour,pram,pstorage,processor,desp,price,offer,tprice) VALUES('$user_id','$pimage','$pname','$pbrand','$pcolour', '$pram','$pstorage','$processor', '$desp','$price','$offer','$tprice')");
  
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
    <label for="pbrand"><b>Brand</b></label></td><td>
    <select name="pbrand">
        <option value="">Choose An Option</option>
        <?php
            $query=mysqli_query($conn,"select * from tbl_phonecategory ");
            while($row=mysqli_fetch_array($query))
            {
                // Use the pcat_name column value as the option value
                echo '<option value="' . $row['pcat_name'] . '">' . $row['pcat_name'] . '</option>';
            }
        ?>
    </select>
</div>
    </td></tr>
      <tr><td>
      <div class="form-check">
        <label for="pcolour"><b>Colour</b></label></td><td>
        <!-- <input type="text" name="pcolour"> -->
        <select name="pcolour">
        <option value="">Choose An Option</option>

          <option value="white">White</option>
          <option value="black">Black</option>
          <option value="grey">Grey</option>
        </select>

        
      </div>
    </td></tr>
      <tr><td>
      <div class="form-check">
        <label for="pram"><b>Ram</b></label></td><td>
        <!-- <input type="text" name="pram"> -->
        <select name="pram">
        <option value="">Choose An Option</option>

          <option value="4GB">4GB</option>
          <option value="6GB">6GB</option>
          <option value="8GB">8GB</option>
          <option value="12GB">12GB</option>

        </select>
      </div>
    </td></tr>
      <tr><td>
      <div class="form-check">
        <label for="pstorage"><b>Storage</b></label></td><td>
        <!-- <input type="text" name="pstorage"> -->
        <select name="pstorage">
        <option value="">Choose An Option</option>

          <option value="32GB">32GB</option>
          <option value="64GB">64GB</option>
          <option value="128GB">128GB</option>

        </select>
  
      </div>
    </td></tr>
      <tr><td>
      <div class="form-check">
        <label for="processor"><b>Processor</b></label></td><td>
        <!-- <input type="text" name="processor"> -->
        <select name="processor">
        <option value="">Choose An Option</option>

          <option value="Samsung Exynos">Samsung Exynos</option>
          <option value="Qualcomm SnapDragon">SnapDragon</option>
          <option value="Kirin">Kirin</option>

        </select>
  
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

  <footer class="footer navbar navbar-expand-lg navbar-light bg-light" style="color:white;">
  </footer>

</body>

</html>
<?php
//}

ini_set('display_errors', true);
error_reporting(E_ALL);
?>

