<?php 
session_start();
$con=mysqli_connect('localhost','root','','userdetails');
$name=$_POST['name'];
$q="select * from customer where user_name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$mail=$row['user_email'];
$amount=$row['curr_balance'];
$_SESSION['name']=$name;

?>
<html>
<head>
	<title><?php echo $name?></title>
	<link rel="stylesheet" href="header.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		body {
			font-family: "Lato", sans-serif;
			margin: 0px;
			text-align:center;
			}

		ul {
	list-style-type: none;
	margin: 0px;
	padding: 0px;
	overflow: hidden;
	background-color: #5D5C61;
	}

	li {
	float: right;
	}

	li a {
		display: block;
		color: white;
		text-align: center;
		font-size:20px;
		padding: 20px 50px;
		text-decoration: none;
		font-family:Courier;
	}
	li a:hover {
		background-color: #fff;
		color:#111;
	}
		table{
			text-align:center;
			margin-top:50px;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			}
		th{
			color:white;
			background-color:#5D5C61;
			font-size:24px;
			padding:16px;
		}
		
		td{
			font-size:22px;
			color: #5D5C61;
			background-color:white;
			padding: 11px 16px 11px 18px;
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
		
		.flat-table-1 {
			background: #336ca6;
		}
		.flat-table-1 tr:hover {
			background: rgba(0,0,0,0.19);
		}
		button {
		  border: none;
		  outline: 0;
		  display: inline-block;
		  padding: 8px;
		  color: white;
		  background-color: #000;
		  text-align: center;
		  cursor: pointer;
		  width: 10%;
		  font-size: 18px;
		}

		a {
		  text-decoration: none;
		  font-size: 22px;
		  color: black;
		}

		button:hover, a:hover {
		  opacity: 0.8;
		}

	</style>
</head>
<body background="project11.jpg">
	<div id="header">
	   <h1 style="position: absolute; margin:5px; padding:9px 10px; color:white; font-family:Courier;font-size:35px;">Banking System</h1>
		<ul>
			<li><a href="transactionhistory.php">Transaction history</a></li>
			<li><a href="transfer.php">Transfer Money</a></li>
			<li><a href="userdetails.php">View All User</a></li>
			<li><a href="index.php">Home</a></li>
		</ul>
	</div>
    <div class="view">
       <table class="flat-table-1">
			<tr>
				<th>Name</th>
				<td><?php echo $name?></td>
			</tr>
			
			<tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th>Email</th>
				<td><?php echo $mail?></td>
			</tr>
           
           <tr>
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<th> Credits</th>
				<td><?php echo $amount?></td>
			</tr>


        </table>

        </div>
		<br>
        <br>
     <div class="buttons">
	<a href="transfer_to.php">
		<button class="glow-on-hover"> Transfer To</button>
	</a>
	</div>
	<br>
	<br>

               
    <div class="buttons">
		<a href="ministatement.php">
		<button class="glow-on-hover">Mini Statement</button>
		</a>
	</div>
               
	

    </body>
</html>