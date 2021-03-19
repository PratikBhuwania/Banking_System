<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
	<style type="text/css">
		body{
			background-image: url("https://cdn.hipwallpaper.com/i/20/62/ZbBgvl.jpg");
			margin: 0;
			background-size: cover;
		}
		h2{
			text-align: center;
			font-size: 80px;
		}
		
		button{
      		font-size: 30px;
      		padding: 25px 50px;
      		justify-content: center;
      		background-color: #071a3d;
			  color:white;
		}
		a{
      color: white;
      font-size:20px;
    }

    
    .container{
    	padding-left: 625px;

    }
	</style>
	<link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
<div id="navbar">
    <a class="hi" href="index.php"><i class="fa fa-bank"></i> Home</a>
	<a class="hello" href="table.php"><i class="fa fa-list"> View all Customers</i></a>
	<a class="hello" href="money.php"><i class="fa fa-money"></i>  Send Money</a>
  <a class="bye" href="transaction.php"><i class="fa fa-history"></i> Transaction History</a>
    </div>
	<?php include 'connection.php' ?>
	
	<?php 
	$sender_name = $_POST["sender_name"];
	$receiver_name = $_POST["receiver_name"];
	$amount = $_POST["amount"];
	

	 $sql5="SELECT Name, Balance FROM customers WHERE name='$sender_name'";
	$result5=mysqli_query($conn, $sql5); 
	$row=mysqli_fetch_array($result5) ;
	$money= $row['Balance'];

	
	
	?>



	<?php $sql3 = "SELECT Name,Id  FROM customers WHERE Name='$receiver_name' ";
	$result3 = mysqli_query($conn, $sql3); 
	
	if (mysqli_fetch_assoc($result3)<1){ 
	 	include 'user.php';
	 } 
	elseif ($money<$amount) {
	 	include 'user2.php';
	 	
	 }

	else{
	 	$sql4 = "UPDATE customers SET Balance=Balance-$amount WHERE Name='$sender_name'";
		$sql2= "UPDATE customers SET Balance=Balance+$amount WHERE Name='$receiver_name' ";
 		$result2 = mysqli_query($conn, $sql2); 
 		$result3 = mysqli_query($conn, $sql4);
 		$sql = "INSERT INTO transaction VALUES ('$sender_name','$receiver_name',  $amount)";
		$result = mysqli_query($conn, $sql); 
		$sql7 = "INSERT INTO transaction( `sender`, `receiver`, `amount`) VALUES ('$sender_name','$receiver_name','$amount')";
$query = mysqli_query($conn, $sql7);
 		include 'user1.php';
 		

 	}



	?>
	
	
	

	



</body>
</html>