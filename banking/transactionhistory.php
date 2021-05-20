<?php
	session_start();
	$con=mysqli_connect('localhost','root','','userdetails');
	$q="select *from mini";
	$result=mysqli_query($con,$q);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Transaction</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="header.css">
	<style>
		.nav-ul {
			list-style-type: none;
			margin: 0;
			padding: 5px;
			verflow: hidden;
			
			}

		.nav-li {
		  float:left;
		  position:absolute;
		}

		.nav-li a {
			
		  display: block;
		  color:#010114;
		  text-align: center;
		  padding: 8px 10px;
		  text-decoration: none;
		  text-transform:uppercase;
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
		color:#000;
	}
		
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-radius:5px;
			border-collapse:collapse;
			 background: none;
			}
		th{
			color:#ffffff;
			font-size:26px;
			padding:16px 55px;
			background-color:#5D5C61;
		}
		
		td{
			font-size:23px;
			background-color:white ;
			padding: 10px 20px 10px 22px;
			
		}
		tr{
			transition: background 0.3s, box-shadow 0.3s;
		}
		th,td{
			border-collapse:collapse;
			border:2px groove gray;
		}
		h2{
			padding:20px;
			font-size:35px;
			color:#805a46;
			text-shadow: 1px 1px black;
			text-align:center;
		}
		.btn {
			background-color:RoyalBlue;
			border: none;
			color: white;
			padding: 12px 16px;
			font-size: 23px;
			cursor: pointer;
		}
		.buttons{
			
			right:42%;
			text-align:center;
		}

		.btn:hover {
			background-color:  DodgerBlue;
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
	<center><h1 style="color:#ffffff;margin-top:5px; padding:10px; background-color:#5D5C61;">Transaction History</h1></center>
		
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>receiver</th>
				<th>Amount</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["sender"]; ?></td>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
	</body>
</html>