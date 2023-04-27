<?php
include "DBConnection.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Fee Collection Form</title>
    <style>
        .form-container {
  width: 50%;
  margin: 0 auto;
  padding: 20px;
  background-color: #f2f2f2;
}

.form-group {
  margin-bottom: 10px;
}

label {
  display: inline-block;
  width: 120px;
  font-weight: bold;
}

input[type=text],
input[type=number] {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

button[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

button[type=submit]:hover {
  background-color: #45a049;
}
</style>
  </head>
  <body>
    <div class="form-container">
      <h2>Fee Collection Form</h2>
      <form  method="post">
        <div class="form-group">
        <?php
                            
                        $sel_query="SELECT * from tbl_registration where type='vendor'";
                        $result = mysqli_query($conn,$sel_query);
                        $vendor_ids = array();

                        while($row = mysqli_fetch_assoc($result))
                        {
                            $vendor_ids[] = $row['regId'];
                        }
                        foreach ($vendor_ids as $vendor_id) {

                            ?>
                               
                               <label for="vendor-id-<?php echo $vendor_id; ?>">Vendor ID:</label>
        <input type="number" id="vendor-id-<?php echo $vendor_id; ?>" name="vendor-id[]" value="<?php echo $vendor_id; ?>">
          <?php } ?>
        </div>
        <div class="form-group">
          <label for="amount">Amount:</label>
          <input type="number" id="amount" name="amount">
        </div>
        <div class="form-group">
        <label for="payment_date">Payment Date:</label>
        <input type="date" name="date" id="date">
        </div>
        <button type="submit" name="submit" type="submit">Submit</button>
      </form>
    </div>
  </body>
</html>
<?php
include "DBConnection.php";
if (isset($_POST['submit'])) {

  // get vendor id and amount from form
  $vendor_ids = $_POST['vendor-id'];
  
  $amount = $_POST['amount'];
  $date=$_POST['date'];

  // connect to database


  // insert fee payment record into database
  foreach ($vendor_ids as $vendor_id) {
  $sql = mysqli_query($conn,"INSERT INTO tbl_rent (`vendor_id`, `amount`,`date`,`status`) VALUES ('$vendor_id', '$amount','$date','unpaid')");
  }
  if ($sql) {
    ?>
    <script>
    alert("Fee payment received successfully");
    </script>
    <?php
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  

  // close database connection
  $conn->close();
}
?>

