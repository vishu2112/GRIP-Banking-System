<?php 
session_start();
$con=mysqli_connect('localhost','root','','userdetails');

$q="select * from customer ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);


?>
<html>
<head>
   <title>viewUser</title>
   <link rel="stylesheet" href="header.css">
	<style>
		
		* {
		  box-sizing: border-box;
		  //box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8);	
		}

		body {
		  font-family: Arial, Helvetica, sans-serif;
		}

		/* Float four columns side by side */
		.column {
		  float: left;
		  width: 20%;
		  padding: 0 10px;
		}

		/* Remove extra left and right margins, due to padding */
		.row {
			margin: 0 0px;
			margin-bottom: 30px;
		}

		/* Clear floats after the columns */
		/*.row:after {
		  content: "";
		  display: table;
		  clear: both;
		}*/

		/* Responsive columns */
		@media screen and (max-width: 600px) {
		  .column {
			width: 100%;
			display: block;
			margin-bottom: 20px;
		  }
		}

		.card {
		  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		  padding: 16px;
		  text-align: center;
		  background-color: #f1f1f1;
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
		  width: 100%;
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
	<center><h1 style="color:#ffffff;margin-top:5px; padding:10px; background-color:#5D5C61;">User Information</h1></center>
		
	<div class='row'>
		<div class='column'><br>
			<div class='card' >
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<img src='project1.png' alt='John' style='width:100%'>
				<h3><b>Name : </b><?php echo $row["user_name"]?></h3>
				<p><b>Customer Id : </b><?php echo $row["user_id"] ?></p>
				<p><b>Email Id : </b><br><?php echo $row["user_email"] ?></p>
				<p><b>Balance : </b><?php echo $row["curr_balance"] ?></p>
				<form action="user.php" method="post">
					<button type ="submit" name="name" value="Mahendra" >Transfer Amount</button>
				</form>
			</div>
		</div>
	</div>
	
	<div class='row'>
		<div class='column'><br>
			<div class='card' >
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<img src='project1.png' alt='John' style='width:100%'>
				<h3><b>Name : </b><?php echo $row["user_name"]?></h3>
				<p><b>Customer Id : </b><?php echo $row["user_id"] ?></p>
				<p><b>Email Id : </b><br><?php echo $row["user_email"] ?></p>
				<p><b>Balance : </b><?php echo $row["curr_balance"] ?></p>
				<form action="user.php" method="post">
					<button type ="submit" name="name" value="Ravindra" >Transfer Amount</button>
				</form>
			</div>
		</div>
	</div>
	
	<div class='row'>
		<div class='column'><br>
			<div class='card' >
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<img src='project1.png' alt='John' style='width:100%'>
				<h3><b>Name : </b><?php echo $row["user_name"]?></h3>
				<p><b>Customer Id : </b><?php echo $row["user_id"] ?></p>
				<p><b>Email Id : </b><br><?php echo $row["user_email"] ?></p>
				<p><b>Balance : </b><?php echo $row["curr_balance"] ?></p>
				<form action="user.php" method="post">
					<button type ="submit" name="name" value="Vishal" >Transfer Amount</button>
				</form>
			</div>
		</div>
	</div>
	
	<div class='row'>
		<div class='column'><br>
			<div class='card' >
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<img src='project1.png' alt='John' style='width:100%'>
				<h3><b>Name : </b><?php echo $row["user_name"]?></h3>
				<p><b>Customer Id : </b><?php echo $row["user_id"] ?></p>
				<p><b>Email Id : </b><br><?php echo $row["user_email"] ?></p>
				<p><b>Balance : </b><?php echo $row["curr_balance"] ?></p>
				<form action="user.php" method="post">
					<button type ="submit" name="name" value="Neel" >Transfer Amount</button>
				</form>
			</div>
		</div>
	</div>
	
	<div class='row'>
		<div class='column'><br>
			<div class='card' >
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<img src='project1.png' alt='John' style='width:100%'>
				<h3><b>Name : </b><?php echo $row["user_name"]?></h3>
				<p><b>Customer Id : </b><?php echo $row["user_id"] ?></p>
				<p><b>Email Id : </b><br><?php echo $row["user_email"] ?></p>
				<p><b>Balance : </b><?php echo $row["curr_balance"] ?></p>
				<form action="user.php" method="post">
					<button type ="submit" name="name" value="Virat" >Transfer Amount</button>
				</form>
			</div>
		</div>
	</div>
	
	<div class='row'>
		<div class='column'><br>
			<div class='card' >
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<img src='project1.png' alt='John' style='width:100%'>
				<h3><b>Name : </b><?php echo $row["user_name"]?></h3>
				<p><b>Customer Id : </b><?php echo $row["user_id"] ?></p>
				<p><b>Email Id : </b><br><?php echo $row["user_email"] ?></p>
				<p><b>Balance : </b><?php echo $row["curr_balance"] ?></p>
				<form action="user.php" method="post">
					<button type ="submit" name="name" value="Rishbh" >Transfer Amount</button>
				</form>
			</div>
		</div>
	</div>
	
	<div class='row'>
		<div class='column'><br>
			<div class='card' >
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<img src='project1.png' alt='John' style='width:100%'>
				<h3><b>Name : </b><?php echo $row["user_name"]?></h3>
				<p><b>Customer Id : </b><?php echo $row["user_id"] ?></p>
				<p><b>Email Id : </b><br><?php echo $row["user_email"] ?></p>
				<p><b>Balance : </b><?php echo $row["curr_balance"] ?></p>
				<form action="user.php" method="post">
					<button type ="submit" name="name" value="Rohit" >Transfer Amount</button>
				</form>
			</div>
		</div>
	</div>
	
	<div class='row'>
		<div class='column'><br>
			<div class='card' >
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<img src='project1.png' alt='John' style='width:100%'>
				<h3><b>Name : </b><?php echo $row["user_name"]?></h3>
				<p><b>Customer Id : </b><?php echo $row["user_id"] ?></p>
				<p><b>Email Id : </b><br><?php echo $row["user_email"] ?></p>
				<p><b>Balance : </b><?php echo $row["curr_balance"] ?></p>
				<form action="user.php" method="post">
					<button type ="submit" name="name" value="Rahul" >Transfer Amount</button>
				</form>
			</div>
		</div>
	</div>
	
	<div class='row'>
		<div class='column'><br>
			<div class='card' >
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<img src='project1.png' alt='John' style='width:100%'>
				<h3><b>Name : </b><?php echo $row["user_name"]?></h3>
				<p><b>Customer Id : </b><?php echo $row["user_id"] ?></p>
				<p><b>Email Id : </b><br><?php echo $row["user_email"] ?></p>
				<p><b>Balance : </b><?php echo $row["curr_balance"] ?></p>
				<form action="user.php" method="post">
					<button type ="submit" name="name" value="Aditya" >Transfer Amount</button>
				</form>
			</div>
		</div>
	</div>
	
	<div class='row'>
		<div class='column'><br>
			<div class='card' >
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<img src='project1.png' alt='John' style='width:100%'>
				<h3><b>Name : </b><?php echo $row["user_name"]?></h3>
				<p><b>Customer Id : </b><?php echo $row["user_id"] ?></p>
				<p><b>Email Id : </b><br><?php echo $row["user_email"] ?></p>
				<p><b>Balance : </b><?php echo $row["curr_balance"] ?></p>
				<form action="user.php" method="post">
					<button type ="submit" name="name" value="Ashish" >Transfer Amount</button>
				</form>
			</div>
		</div>
	</div>
	
	<div class='row'>
		<div class='column'><br>
			<div class='card' >
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<img src='project1.png' alt='John' style='width:100%'>
				<h3><b>Name : </b><?php echo $row["user_name"]?></h3>
				<p><b>Customer Id : </b><?php echo $row["user_id"] ?></p>
				<p><b>Email Id : </b><br><?php echo $row["user_email"] ?></p>
				<p><b>Balance : </b><?php echo $row["curr_balance"] ?></p>
				<form action="user.php" method="post">
					<button type ="submit" name="name" value="Harsh" >Transfer Amount</button>
				</form>
			</div>
		</div>
	</div>
	
	<div class='row'>
		<div class='column'><br>
			<div class='card' >
				<?php  
					$row=mysqli_fetch_array($result);
				?>
				<img src='project1.png' alt='John' style='width:100%'>
				<h3><b>Name : </b><?php echo $row["user_name"]?></h3>
				<p><b>Customer Id : </b><?php echo $row["user_id"] ?></p>
				<p><b>Email Id : </b><br><?php echo $row["user_email"] ?></p>
				<p><b>Balance : </b><?php echo $row["curr_balance"] ?></p>
				<form action="user.php" method="post">
					<button type ="submit" name="name" value="Jasprit" >Transfer Amount</button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>