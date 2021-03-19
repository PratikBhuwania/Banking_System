<?php
	session_start();
  $connect = mysqli_connect("localhost", "root", "", "bank");
?> 
<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>send money</title>
	<style type="text/css">
		form{
			font-size: 40px;
			font-weight:30px;
			text-align: center;
			margin-bottom: 100px;
			margin-up: 200px;
			padding-top: 80px;
			color: white;
			height: 400px;
		}
		label{
			padding-top: 20px;
			justify-content: left;
			font-weight: 100px;
			color: black;
			
		}
		.container{
			width: 400px;
			height: 370px;
			padding-left: 500px;
			margin-top: 40px;
			
		}
		.container input{
			width:90%;
			clear: both;
			height: 35px;
			border: 50px;
			color:black;
		}
		button{
			font-size: 30px;
      		padding: 50px 10px;
      		background-color: #071a3d; 
			color: white;
			margin-left: 700px;
		}
		

		
		.press{
			padding-top: 50px;
			padding-left: 750px;
			margin-left: 700px;
		}
		body{
			background-image: url("https://cdn.hipwallpaper.com/i/20/62/ZbBgvl.jpg");
			margin: 0;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.click{
			width: 300px;
			background-color: #071a3d;
			color: white;
			font-size: 25px;
			margin-left: 550px;
			margin-top:30px;
			height:40px;
		}
		.click:hover{
			background-color: rgba(19, 135, 243, 0.74);	
		}
		a{
      color: white;
      font-size:20px;
    	}
	</style>
  <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
<div id="navbar">
  <a class="hi" href="index.php"><i class="fa fa-bank"></i> Home</a>
  <a class="hello" href="table.php"><i class="fa fa-list"></i> View all Customers</a>
  <a class="hello" href="money.php"><i class="fa fa-money"></i>  Send Money</a>
  <a class="bye" href="transaction.php"><i class="fa fa-history"></i> Transaction History</a>
 

  </div>

	<div class="container " >
		<form action="transfer.php" method="post" class="text-center border border-dark p-5 m-5" style="background-color: #9BF3F0" >
			<label><b>SENDER:</b></label>
			<input list="names" id="sender_name" type="text" name="sender_name", placeholder="Enter Sender's Name " required>
			<datalist id="names">
				<option value="Pratik Bhuwania"></option>
				<option value="Eve bhatt"></option>
				<option value="John Sharma"></option>
				<option value="Ron Singh"></option>
				<option value="Jill Gupta"></option>
				<option value="Tamako Reddy"></option>
				<option value="Harry Potter"></option>
				<option value="Wanda Thakur"></option>
				<option value="James Thakar"></option>
				<option value="Ramzy XYZ"></option>
				
			</datalist>
		</br>
			<label><b>RECIEVER:</b></label>
			<input list="namess" type="" id="receiver_name" name="receiver_name" placeholder="Enter Receiver's Name "  required>
			<datalist id="namess">
				<option value="Pratik Bhuwania"></option>
				<option value="Eve bhatt"></option>
				<option value="John Sharma"></option>
				<option value="Ron Singh"></option>
				<option value="Jill Gupta"></option>
				<option value="Tamako Reddy"></option>
				<option value="Harry Potter"></option>
				<option value="Wanda Thakur"></option>
				<option value="James Thakar"></option>
				<option value="Ramzy XYZ"></option>
			</datalist>
		</br>
			<label><b>AMOUNT: </b></label>
			<input type="number" id="amount" name="amount" placeholder="Enter amount here" required></div>
			<input class="click" type="submit" name="" value="Send Money">
		</form>
	
<!-- 	</div>
	<script type="text/javascript" src="alert.js"></script>
	<div class="press">
		<button >Send Amount</button>
	</div> -->
	
</body>
</html>