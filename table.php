<?php
	
		$conn = mysqli_connect("localhost", "root", "", "bank");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://kit.fontawesome.com/yourcode.js"></script>
    <title>Customers List</title>
    <style type="text/css">
        table, th,tr,td{
            border: 2px solid black;
        }
        .center{
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            
            
        }
        table{
            width: 900px;
            height: 500px;
            color: black;
            font-size: 30px;
            border-color: black;
        }
        h1{
            text-align: center;
            color: white;
            font-size: 40px;
            margin-top:10px;


        }
        body{
            background-image: url("https://cdn.hipwallpaper.com/i/20/62/ZbBgvl.jpg");

            /* background-color:powderblue; */
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
        }
        th, td{
            text-align: center;
            /* border: 2px solid black; */
            
        }
        th{
            background-color:  #DAFFED;
            color: black;
            border: 2px solid black;

        }
        a{
            font-size:20px;
        }
        tr{
            font-size:25px;
            border: 2px solid black;    
            background-color: #9BF3F0;
            
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
  <a class="hello" href="table.php"><i class="fa fa-list"></i>View all Customers </a>
  <a class="hello" href="money.php"><i class="fa fa-money"></i>  Send Money</a>
  <a class="bye" href="transaction.php"><i class="fa fa-history"></i> Transaction History</a>
  </div>
    
    <h1><u>Customers Details</u></h1>
    <table class="center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Balance</th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php $sql = "SELECT Id, Name, Email, Balance FROM customers";
        $result = mysqli_query($conn, $sql);?>
        <?php while( $row = mysqli_fetch_array($result)) : ?>
        
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['Id']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Balance']; ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>

</body>
</html>