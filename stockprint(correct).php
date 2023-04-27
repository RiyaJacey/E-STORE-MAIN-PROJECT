

<!DOCTYPE html>
<?php
include "DBConnection.php";

session_start();
$name=$_SESSION['name'];
if(!isset($_SESSION['name']))
{
	header('location:../login/signin11.php');
}
?>
<html>
  <head>
    <title>Stock Report</title>
    <style>
      table,
      th,
      td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
        text-align: left;
      }
	  body {
  display: flex;
  align-items: center;
  justify-content: center;
}
    </style>
  </head>
  <body>
  <?php
                          $sql = mysqli_query($conn,"SELECT * FROM tbl_registration where `name`='$name'");
                          if($sql){
                            $numrow = mysqli_num_rows($sql);
                            if($numrow!=0){
                             
                              while($row1 = mysqli_fetch_array($sql)){
                                
                                
                                        ?>
    <table>
		<tr>  <td colspan="7" ><center>  <h1>Stock Report</h1></td><center></tr>
      <tr>
        <td colspan="7" >
          <center><strong><h1>E-STORE PVT LMTD.</h1></strong></center>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          Stock Manager Name</td><td colspan="7">: <?php echo $row1['name'];?>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          Contact No        </td><td colspan="7">:       <?php echo $row1['phone'];?>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          Department Name   </td><td colspan="7">: Smart-Phones & Laptops Sales
        </td>
        
      </tr>
      
      <tr>
        <td colspan="2">
          Date</td><td id="date" colspan="3">
	
	<script>
		var currentDate = new Date();
		document.getElementById("date").innerHTML = currentDate.toDateString();
	</script>
        </td>
        <td colspan="5" rowspan="2"><tt><strong>Formulas Used</strong><br>Consumption Quantity = Opening Stock + Purchase Quantity - Balance Quantity <br>
        Closing Stock Quantity = Opening Stock Quantity + Purchases - Sales</tt>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          Email Id        </td><td colspan="3"> : <?php echo $row1['email'];?>
        </td>
      </tr>
      <?php
                                          }       
                                    }
                                }
                            
                       ?> 
      <tr>
        <td colspan="7">
          <center><strong>Stock Quantity Details</strong></center>
        </td>
      </tr>
      <tr>
        <td colspan="7">
		<center>From 0000 To 0000</center>
        </td>
      </tr>
      <tr>
        <th>Sr</th>
        <th>Item Name</th>
        <th>Opening Stock Qty</th>
        <th>Purchase Qty</th>
        <th>Balance Qty</th>
        <th>Consumption Qty</th>
        <th>Closing Stock Qty</th>
      </tr>
      <?php        $sq=0;
      $so=0;

                          $sql = mysqli_query($conn,"SELECT * FROM stock ");
                          if($sql){
                            $numrow = mysqli_num_rows($sql);
                            if($numrow!=0){
                             
                              while($row1 = mysqli_fetch_array($sql)){
                                $ppid=$row1['product_id'];
                                
                                        ?>
      <tr>
        <td><?php echo $row1['stock_id'];?></td>
        <td><?php $sql1 = mysqli_query($conn,"SELECT pname FROM tbl_productdetail where pid=$ppid ");
        while($row2 = mysqli_fetch_array($sql1)){
        echo $row2['pname'];
        }?></td>
        <td>50</td>
        <td>20</td>
        <td><?php echo $row1['stock_quantity'];?></td>
        <td><?php echo 70-$row1['stock_quantity'];
        $sq+=(70-$row1['stock_quantity']);?></td>
        
        
        <td><?php echo 70-$row1['sold_out'];
        $so+=(70-$row1['sold_out']);?></td>
      </tr>
      <?php
                                          }       
                                    }
                                }
                            
                       ?> 
      
        <td colspan="5"><strong>TOTAL</strong></td>
        
        
        <td><?php echo $sq; ?></td>
        <td><?php echo $so; ?></td>
      </tr>
      <tr id="p1"><td>        <button class="btn btn-flat btn-success" type="button" id="print" onclick="printWithoutElement('p1')">Print</button></td></tr>
    </table>
    <!--
      
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.0/jspdf.umd.min.js"></script>
<script>
  // add event listener to print button
  document.getElementById("print").addEventListener("click", function() {
    // create new jsPDF instance
    var doc = new jsPDF();
    // get HTML content of current page
    var html = document.documentElement.innerHTML;
    // remove print button from HTML content
    html = html.replace('<button class="btn btn-flat btn-success" type="button" id="print">Print</button>', '');
    // add HTML content to PDF
    doc.fromHTML(html);
    // auto print PDF
    doc.autoPrint();
    // save PDF
    doc.save("stock_report.pdf");
  });
</script> -->
<script>
function printWithoutElement(print) {
  var element = document.getElementById("p1");
  element.parentNode.removeChild(element);
  window.print();
}
</script>
  </body>
</html>
