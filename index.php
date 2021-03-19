<?php
	session_start();
  $connect = mysqli_connect("localhost", "root", "", "bank");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Basic Banking System</title>
	<style type="text/css">
		body{
			background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/8/8d/FirstBankofUS00_crop.jpg/1200px-FirstBankofUS00_crop.jpg" );
			background-repeat: no-repeat;
  			background-size: cover;
        margin: 0;
        
		}
    	h1{
      font-size: 90px;
      text-align: center;
      color: dark black;
      /* text-shadow: 2px 2px #262626; */
      font-family: 'candal',serif;
      /* background-color: white */
      
    }
    	/* button{
      font-size: 30px;
      padding: 10px 30px;
      justify-content: center;
      background-color: #071a3d;
      color: rgba(19, 135, 243, 0.74);
      text-decoration: none;


    } */
    	h5{
      text-align: center;
      font-size: 40px;
      color: black;
      text-shadow: 1px 1px #f7f8f8;


    }
    	div{
      
      margin-left: auto;
      margin-right: auto;

    }
    /* .container{
      padding-left: 530px;
  

    } */
    /* h3{
    	text-align: center;
    	font-size: 25px;
    	color: black;
      text-shadow: 1px 1px #3b5278;

    } */
    a{
      color: white;
      font-size:20px;
      
    }
    /* button:hover{
      background-color: rgba(19, 135, 243, 0.74);
      text-align: center;
    } */
    .footer {
     position: fixed;
     left: 0;
     bottom: 0;
     width: 100%;
     background-color: #071a3d;
     color: white;
     text-align: center;
     margin-bottom:0px;
    
}

  </style>
  <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
	
<?php include 'connection.php' ?>


  <div id="navbar">
  <a class="hi" href="index.php"><i class="fa fa-bank"> Home</i></a>
  <a class="hello" href="table.php"><i class="fa fa-list"> View all Customers</i></a>
  <a class="hello" href="money.php"><i class="fa fa-money"></i>  Send Money</a>
  <a class="bye" href="transaction.php"><i class="fa fa-history"></i> Transaction History</a>
  </div>
<br>
<br>
	 <h1>Money Bank</h1>
   
  <!-- <h5><i><u>The Bank that begins with U.</u></i></h5> -->
  <!-- <h3>The Bank that begins with U.</h3> -->
  
  <!-- <div class="container">
    <button><a href="money.php"><b>SEND MONEY</b></a></button>
    <!--\ <button id="user"><a href="table.php">View user list</button>
      <button><a href="transaction.php">Transaction History</a></button> -->
  </div>
   -->
  <div class="footer">
  <marquee behavior="scroll" direction="left">
  <p>Made By|Pratik Bhuwania|The Sparks Foundation|</p></marquee>
</div>


</body>

	

</body>
</html>