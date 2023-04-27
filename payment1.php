<?php
require_once("DBConnection.php");
session_start();
// if(!isset($_SESSION["name"])){
//   header("Location: signin11.php");
// }
// else{
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
        
            <a class="navbar-brand" href="admin.php">PAYMENT DETAILS</a>
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
            <button id="logout" onclick="window.location.href='../login/signin11.php';">Logout</button> </div>
            </li>
            </ul>
            
    </nav>

    <h1>PAYMENT DETAILS</h1>

    <div class="mycontainer">

        <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                  <thead>
                      <th>#</th>
                      
                      <th>Name</th>
                      <th>Amount</th>
                      <th>PaymentId</th>
                      <th>Status</th>
                      <th>Added On</th>     
                    
                  </thead>
                  <tbody>
                    <!-- loading all leave applications of the user -->
                    <?php
                          $sql = mysqli_query($conn,"SELECT * FROM tbl_payment ");
                          if($sql){
                            $numrow = mysqli_num_rows($sql);
                            if($numrow!=0){
                              $cnt=1;
                              while($row1 = mysqli_fetch_array($sql)){
                                
                                echo "<tr>";
                                  echo "<td>$cnt</td>";
                                        ?>
                                        
                                       
                                       <?php echo " <td>{$row1['name']}</td>";?>
                                       <?php echo " <td>{$row1['amount']}</td>";?>
                                       <?php echo "<td>{$row1['payment_id']}</td>";?>
                                       <?php echo "<td>{$row1['payment_status']}</td>";?>
                                       <?php echo "<td>{$row1['added_on']}</td>";?>
                                       
                    
                     </tr>  <?php $cnt++;
                                         }       
                                    }
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
//}

ini_set('display_errors', true);
error_reporting(E_ALL);
?>
