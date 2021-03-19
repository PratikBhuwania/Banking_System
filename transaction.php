<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://kit.fontawesome.com/yourcode.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Transaction History</title>
	<style type="text/css">
		 table{
            width: 800px;
            height: 100px;
            color: black;
            font-size: 30px;
            border-color: black;
            border: 2px solid black;
  border-collapse: collapse;;
            
        }
        tr, th, td {
        	border: 100px solid #071a3d ;
            width: 800px;
        }
        th,td{
        	text-align: center;
            width: 800px;
            border: 2px solid black;
  border-collapse: collapse;
  padding: 5px;
        }
        th{
        	background-color:  #DAFFED ;
        	color: Black;
            width: 800px;
            border: 2px solid black;
        }
        body{
        	/* background-color:powderblue; */
            background-image: url("https://cdn.hipwallpaper.com/i/20/62/ZbBgvl.jpg");
        	margin: 0;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .middle{
        	margin-left: auto;
        	margin-right: auto;
            width: 800px;
        }
        h1{
        	text-align: center;
        	font-size: 40px;
            color: white;
        }
        a{
            color: white;
            font-size:20px;
        }
        tr{
            font-size:25px;
            border: 2px solid black;    
            background-color:  #9BF3F0;
            
        }
        tr:hover{
            background-color: #f5f5f5;
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

  </div>
	<?php include'connection.php' ?>

	<h1><u>Transaction History</u></h1>

	

	<table class="middle">
    <thead>
        <tr>
        <th>Sr. No</th>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
            <th>Timestamp</th>
        </tr>
    </thead>
    <tbody>



		<?php $sql = "SELECT * FROM transaction";
        $result = mysqli_query($conn, $sql);?>
    	<?php while( $row = mysqli_fetch_array($result)) : ?>
        
           
		<tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['Srno']; ?></td>
            <td><?php echo $row['sender']; ?></td>
            <td><?php echo $row['receiver']; ?></td>
            <td><?php echo $row['amount']; ?></td>
            <td><?php echo $row['time']; ?> </td>
        </tr>
        <?php endwhile ?>
    </tbody>
	</table>




</body>
</html>