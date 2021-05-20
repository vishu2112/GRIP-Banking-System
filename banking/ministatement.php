<?php
	session_start();
	$con=mysqli_connect('localhost','root','','userdetails');
	$name1=$_SESSION['name'];
	$q="select receiver,amount from mini where sender='$name1'";
	$result=mysqli_query($con,$q);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Mini Statement</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="header.css">
	<style>
		table{
			text-align:center;
			margin-left: auto;
			margin-right: auto;
			border:4px solid gray;
			border-collapse:collapse;
			 background: #336ca6;
			}
		th{
			color:white;
			background-color:#5D5C61;
			font-size:26px;
			padding:15px 50px;
		}
		
		td{
			font-size:23px;
			background-color:white;
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
			color:white;
			background-color:#5D5C61;
			text-shadow: 1px 1px black;
			text-align:center;
			margin-top:5px;
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
		  opacity: 0.7;
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
		<h2><?php echo "Mini Statement of ".$name1?></h2>
		<table class="flat-table-1">
			<tr>
				<th>Sender</th>
				<th>Credits</th>
			</tr>
			<tr>
			
			<?php while($row = $result->fetch_assoc()) { ?>
			
			<tr>
				<td><?php echo $row["receiver"]; ?></td>
				<td><?php echo $row["amount"]; ?></td>
			</tr>
			<?php } ?>
		</table>
		<br>
		<br>
		<div>
		<form action="user.php" method="post">
			<div class="buttons">
			<br><center><button class="glow-on-hover" type="submit" name="name" value="<?php echo $name1 ?>">BACK</button></center>
			
			</div>
		</form>
		
		
	</body>
</html>