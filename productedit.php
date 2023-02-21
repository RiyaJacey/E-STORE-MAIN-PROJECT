<?php
session_start();
include ('DBConnection.php');
date_default_timezone_set('Asia/Kolkata');// change according timezone
$currentTime = date( 'd-m-Y h:i:s A', time () );
$targetDir = "images1/";
if(isset($_POST['submit']))
{
$pimage=$_FILES["pimage"]["name"];
$pid=$_REQUEST['pid'];
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
move_uploaded_file($_FILES["pimage"]["tmp_name"],$targetFilePath);

$query="UPDATE tbl_productdetail SET pimage='$pimage',pname='$pname',pbrand='$pbrand',pcolour='$pcolour',pram='$pram',pstorage='$pstorage',processor='$processor',desp='$desp',price='$price',offer='$offer',tprice='$tprice' where pid='$pid'";
$query_run=mysqli_query($conn,$query);
if($query_run)
{
    $_SESSION['status'] = "Product updated successfully";
    header('location:deletedet.php');
}
else
{
    echo "no";
}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form method="POST" action="#" enctype="multipart/form-data" >
    <?php
     if(isset($_GET['pid']))
     {
$pid=$_GET['pid'];
$query=mysqli_query($conn,"select * from tbl_productdetail where pid='$pid'");
while($row=mysqli_fetch_array($query))
{
?>

<div class="wrapper">
    <div class="title">
      UPDATE PRODUCTS
    </div>
   
    <div class="form">
    <input type="hidden"name="pid"value="<?= $row['pid'] ?>">
    <div class="inputfield">
          <label>Product image</label>
          <input type="file" class="input" name="pimage" id="fileUpload" value="<?= $row['pimage'] ?>" required>
               <script type="text/javascript">
                 function getFilePath(){
                   $('input[type=file]').change(function () {
                    var filePath=$('#fileUpload').val(); 
                  });
                 }
               </script>
       </div> 
       <div class="inputfield">
          <label>Product Name</label>
          <input type="text" class="input" name="pname" placeholder="name" value="<?= $row['pname'] ?>" required>
       </div> 
       <div class="inputfield">
          <label>Product Brand</label>
          <input type="text" class="input" name="pbrand" placeholder="brand" value="<?= $row['pbrand'] ?>" required>
       </div> 
       <div class="inputfield">
          <label>Colour</label>
          <input type="text" class="input" name="pcolour" placeholder="size" value="<?= $row['pcolour'] ?>" required>
       </div>  
       <div class="inputfield">
          <label>RAM</label>
          <input type="text" class="input" name="pram" placeholder="Ram" value="<?= $row['pram'] ?>" required>
       </div>
       <div class="inputfield">
          <label>Storage</label>
          <input type="text" class="input" name="pstorage" placeholder="storage" value="<?= $row['pstorage'] ?>" required>
       </div>
       <div class="inputfield">
          <label>Processor</label>
          <input type="text" class="input" name="processor" placeholder="processor" value="<?= $row['processor'] ?>" required>
       </div>
       <div class="inputfield">
          <label>Description</label>
          <input type="text" class="input" name="desp" placeholder="description" value="<?= $row['desp'] ?>" required>
       </div>
       <div class="inputfield">
          <label>Price</label>
          <input type="number" class="input" name="price" placeholder="price" value="<?= $row['price'] ?>" required>
       </div> 
       <div class="inputfield">
          <label>Offer</label>
          <input type="number" class="input" name="offer" placeholder="offer" value="<?= $row['offer'] ?>" required>
       </div> 
       <div class="inputfield">
          <label>Price</label>
          <input type="number" class="input" name="tprice" placeholder="Total Price" value="<?= $row['tprice'] ?>" required>
       </div> 
   
       
              
      <div class="inputfield">
        <input type="submit" value="UPDATE" name="submit" class="btn">
      
    </div>
    <?php }} ?> 
</div>
</form>
</body>
</html>
