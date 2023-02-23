 <?php
require_once("DBConnection.php");
session_start();
if(!isset($_SESSION["name"])){
  header("Location: signin11.php");
}
else{
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
    <title>Admin Panel</title>

    <style>
        h1 {
            text-align: center;
            font-size: 2.5em;
            font-weight: bold;
            padding-top: 1em;
        }

        .mycontainer {
            width: 90%;
            margin: 1.5rem auto;
            min-height: 60vh;
        }

        .mycontainer table {
            margin: 1.5rem auto;
        }
    </style>

</head>

<body>
    <nav class="navbar header-nav navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        
            <a class="navbar-brand" href="admin.php">Online Leave Application</a>
            <!-- <button class="btn-default" onclick="window.location.href='leavehist.php';">Leave History</button> </div> -->
            <!-- <nav class="nav navbar-right">
            <a class="nav-link active" href="#">Active</a>
            
            </nav>

            <button id="logout" onclick="window.location.href='logout.php';">Logout</button> </div> -->

            <ul class="nav justify-content-end">

            <!-- <li class="nav-item">
            <a class="nav-link" href="list_emp.php" style="color:white;">View Employees <span class="badge badge-pill" style="background-color:#2196f3;"><?php include('count_emp.php');?></span></a>
            </li>
             -->
            <li class="nav-item">
                <a class="nav-link" href="leave_history.php" style="color:white;">View Leave History</a>
            </li>
            <li class="nav-item">
            <button id="logout" onclick="window.location.href='logout.php';">Logout</button> </div>
            </li>
            </ul>
            
    </nav>

    <h1>Admin Panel - Registered Employees</h1>

    <div class="mycontainer">

        <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                  <thead>
                      <th>#</th>
                      <th>Image</th>
                      <th>Name</th>
                      <th>Brand</th>
                      <th>Colour</th>
                      <th>Ram</th>
                      <th>Storage</th>
                      <th>Processor</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Offer</th>
                      <th>Total Price</th>
                      <th>Action</th>
                      <th>Update</th>
                  </thead>
                  <tbody>
                    <!-- loading all leave applications of the user -->
                    <?php
                          $sql = mysqli_query($conn,"SELECT * FROM tbl_productdetail");
                          if($sql){
                            $numrow = mysqli_num_rows($sql);
                            if($numrow!=0){
                              $cnt=1;
                              while($row1 = mysqli_fetch_array($sql)){
                                $a= 'images1/'.$row1['pimage'];
                                echo "<tr>";
                                  echo "<td>$cnt</td>";
                                        echo"<td>";?>
                                        <img src="<?php echo $a ?> " style="width:150px; height:150px;">
                                       <?php echo " </td>";?>
                                       <?php echo " <td>{$row1['pname']}</td>";?>
                                       <?php echo " <td>{$row1['pbrand']}</td>";?>
                                       <?php echo "<td>{$row1['pcolour']}</td>";?>
                                       <?php echo "<td>{$row1['pram']}</td>";?>
                                       <?php echo "<td>{$row1['pstorage']}</td>";?>
                                       <?php echo "<td>{$row1['processor']}</td>";?>
                                       <?php echo "<td>{$row1['desp']}</td>";?>
                                       <?php echo "<td>{$row1['price']}</td>";?>
                                       <?php echo " <td>{$row1['offer']}</td>";?>
                                       <?php echo " <td>{$row1['tprice']}</td>";?>
                                    <td>
               <?php
                    if($row1['status']==1){
                        echo '<p><a href="inactive.php?id='.$row1['pid'].'$status=1">Disable</a></p>';
                    }
                    else{
                        echo '<p><a href="active.php?id='.$row1['pid'].'$status=0">Enable</a></p>';
                    }
                    ?></td>
                     </tr>";  <?php
                                         $cnt++; }       
                                    }
                                }
                                else{
                                    echo "Query Error : " . "SELECT * FROM leaves WHERE status='Pending'" . "<br>" . mysqli_error($conn);
                                }
                       ?> 
                            
                  </tbody>
              </table>
          </div>
    </div>

    <footer class="footer navbar navbar-expand-lg navbar-light bg-light" style="color:white;">
    </footer>
</body>

</html>

<?php
}

ini_set('display_errors', true);
error_reporting(E_ALL);
?>