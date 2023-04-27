<!DOCTYPE html>
<html>
<head>
	<title>Monthly Rent Payment Application Form</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
        <style>
		.form-box {
			background-color: #f8f8f8;
			padding: 20px;
			margin-top: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px #ccc;
			max-width: 800px;
			margin: 0 auto;
		}
	
		.date {
			text-align: right;
			margin-bottom: 10px;
		}
    
  
  input[type="checkbox"] {
  height: 16px;
  width: 16px;
}
    
    #err {
      display: none;
      padding: 1.5em;
      padding-left: 4em;
      font-size: 1.2em;
      font-weight: bold;
      margin-top: 1em;
    }

    .error {
      color: #FF0000;
    }
    .form-group{
      color:black;
      /* background-color:black; */
    }
    .h11
    {
      color:black;
    }
    select option {
  color: black;
}

	</style>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
<?php       
                             session_start();
                             include "DBConnection.php";
                               $nn=$_SESSION["name"];
                               $sql11 = mysqli_query($conn,"SELECT * FROM tbl_registration where name='$nn' ");
                               $row11 = mysqli_fetch_array($sql11);
                               $id=$row11['regId'];
                          $sql22 = mysqli_query($conn,"SELECT * FROM tbl_rent where status='unpaid' and vendor_id='$id'");
                          
                           
                          $numrow22 = mysqli_num_rows($sql22);
                          
                              while($row22 = mysqli_fetch_array($sql22)){
                                $vid=$row22['vendor_id'];
                                $ttamount=$row22['amount'];
                                $_SESSION['ramount']=$ttamount;
                                
                                        ?> 
                            <span class="d-none d-lg-inline-flex"></span>
                            <?php if($numrow22!=0){ ?> 
                                <form action="process-payment.php" method="post">                
                                <input type="hidden" id="name1" value="<?php echo $nn; ?>">

    
                                <div class="form-box ">
		<div class="row">
			<div class="col-md-6">
				<h2>Monthly Rent Payment Application Form</h2>
			</div>
			<div class="col-md-6">
				<p class="date">Payment Date: <?php echo date('m/d/Y'); ?></p>
			</div>
		</div>
		<div class="form-box">
			
				<div class="form-group">
					<label for="tenant-name">Tenant ID:</label>
					<label><?php echo $row22['vendor_id']; ?></label>
				</div>
				<div class="form-group">
					<label for="month">Tenant Name:</label>
					<label><?php echo $row11['name']; ?></label>
				 </div>
				
				<div class="form-group">
					<label for="email">Email :</label>
                    <label><?php echo $row11['email']; ?></label>

				</div>
        <div class="form-group">
					<label for="due">Due Date :</label>
                    <label><?php echo $row22['date']; ?></label>

				</div>
                <div class="form-group">
					<label for="phone">Contact No:</label>
                    <label><?php echo $row11['phone']; ?></label>
				</div>
               <input type="hidden" name="amount" id="amount" value="<?php echo $row22['amount']; ?>">



                <div class="form-group mb-3">
		      			<label  for="type">Check Here For Installment Payment
		      			
                <input type="checkbox" id="type" name="type" class="form-control" placeholder="YOUR TYPE"  onchange="Validtype(this)" > </label>
                
                
                          <div id="checkbox-container"  style="display: none;">
                          <div class="form-group">
                <label for="installments">Installments:</label>

    <select name="installments" id="installments" onmouseout="ipay()">
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
				</div>
                
                
        <script>
            function ipay()
    {
        
        var ival = document.getElementById("installments").value;
        var x=Number(document.getElementById("installments").value);
        var y=Number(document.getElementById("amount").value);
              if(x==2) 
              {
               

            var z=Number(y/2);
            document.getElementById("tamount").value=Number(z);

              }
              if(x==3) 
              {
               

            var z=Number(y/3);
            document.getElementById("tamount").value=Number(z);
            

              }
              var checkBox = document.getElementById("type");
        if (checkBox.checked == true){
    document.getElementById('checkbox-container').style.display = 'block';
    
    var a1 = document.getElementById("tamount").value;
    
    document.getElementById("famount").value=Number(a1);



  }
  else {
    document.getElementById('checkbox-container').style.display = 'none';
    
    

  }
              
    }
    </script>
    <span class="icon fa fa-paper-plane-o">Make the full payment on or before : <?php echo $row22['date']; ?></span>

</div>
<script>
    
                        function Validtype(type) 
                        {
                            var checkBox = document.getElementById("type");
        if (checkBox.checked == true){
    document.getElementById('checkbox-container').style.display = 'block';
    



  } 

  else {
    document.getElementById('checkbox-container').style.display = 'none';
    
    var a12 = document.getElementById("amount").value;
    
    document.getElementById("tamount").value=Number(a12);

  }
}




  </script>







<div class="form-group">
    <label for="rent-amount">Rent Amount:</label>
    <input type="number" class="form-control" id="tamount" name="tamount" min=500 value="<?php echo $row22['amount']; ?>" required >
                
</div>
<!-- <div class="form-group">
    <label for="rent-amount">Total Amount:</label>
    <input type="number" class="form-control" id="famount" name="famount" min=500  required >
        
</div> -->

                
                
                
				<!-- <div class="form-group">
					<label for="payment-method">Payment Method:</label>
					<select class="form-control" id="payment-method" name="payment-method" required>
						<option value="">--Select--</option>
						<option value="credit-card">Credit Card</option>
						<option value="debit-card">Debit Card</option>
						<option value="paypal">PayPal</option>
						<option value="bank-transfer">Bank Transfer</option>
					</select>
				</div> -->
				<input type="button" id="rzp-button1"name="btn"value="Go To Payment"class="btn btn-primary" onclick="pay_now()"/>
				<!-- <button type="submit" class="btn btn-default" style="background-color:black; color:white;">Pay</button> -->
			</form>
            <?php }} ?>
		</div>
	</div>
    <script>
        function pay_now(){
		var name = jQuery('#name1').val();
		console.log(name);
		
        var amount=document.getElementById("tamount").value;
        var options =  {
            "key": "rzp_test_zigWqqvftHFAgY", // Enter the Key ID generated from the Dashboard
            "amount": amount*100, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "E-Store",
            "description": "Test Transaction",
            "image": "https://example.com/your_logo",
            "handler":function(response){
              
               jQuery.ajax({
                   type:"POST",
                   url: "rent_process.php",
                   data:"payment_id="+response.razorpay_payment_id+"&amount="+amount+"&name="+name,
                   success:function(response){
                       window,location.href="vpanel.php";
                    
                       alert("Payment successful. Payment ID: " + response);

                       
                       
                   }
               });
              
      }
        
    
};
var rzp1 = new Razorpay(options);

    rzp1.open();
    
    }
        </script>
</body>

</html>
