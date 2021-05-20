	<?php
session_start();
$con=mysqli_connect('localhost','root','','userdetails');
$q="select user_name from customer";
$result=mysqli_query($con,$q);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select User</title>
	<link rel="stylesheet" href="header.css">
	<style>
	body{
		
		vertical-align: middle;
		text-align:center;
		
	}
	
	label{
		color:white;
		
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
	.center{
		display:inline-block;
		background-color:#5D5C61;
		padding:50px;
		border-radius:10px;
		border:solid #ffffff;
	}
	option{
		color:#990000;
	}	
	.ho{
		padding-top:50px;
	}
	.button1{
		color:white;
	}
	.button{
		border-radius:10px;
		border: 1px solid black;
		height: 51px;
		width: 218px;
		margin: auto;
		overflow: hidden;
		cursor: pointer;
		color: white;
		font-size:17px;
		font-weight:bold;
		background:none;
	}
	.button:hover{
		background-color:white;
		color:#333;
	}
	input,select{
		width : 100%;
		height : 30px;
	}

	label{
		font-size : 25px;
		color :  #1aff1a;
}
	</style>
	<script>
		 function random_function()
            {
                var a=document.getElementById("input").value;
				if(a==="Mahendra"){
				 var arr=["Ravindra","Vishal","Neel","Virat","Rishbh","Rohit","Rahul","Aditya","Ashish","Harsh","Jasprit"];
				 }
				 else if(a==="Ravindra"){
					var arr=["Mahendra","Vishal","Neel","Virat","Rishbh","Rohit","Rahul","Aditya","Ashish","Harsh","Jasprit"];
				}
				else if(a==="Vishal"){
					var arr=["Mahendra","Ravindra","Neel","Virat","Rishbh","Rohit","Rahul","Aditya","Ashish","Harsh","Jasprit"];
				}
				else if(a==="Neel"){
					var arr=["Mahendra","Ravindra","Vishal","Virat","Rishbh","Rohit","Rahul","Aditya","Ashish","Harsh","Jasprit"];
				 }
				 else if(a==="Virat"){
					var arr=["Mahendra","Ravindra","Vishal","Neel","Rishbh","Rohit","Rahul","Aditya","Ashish","Harsh","Jasprit"];
				 }
				 else if(a==="Rishbh"){
					var arr=["Mahendra","Ravindra","Vishal","Neel","Virat","Rohit","Rahul","Aditya","Ashish","Harsh","Jasprit"];
				 }
				 else if(a==="Rohit"){
					var arr=["Mahendra","Ravindra","Vishal","Neel","Virat","Rishbh","Rahul","Aditya","Ashish","Harsh","Jasprit"];
				 }
				 else if(a==="Rahul"){
					var arr=["Mahendra","Ravindra","Vishal","Neel","Virat","Rishbh","Rohit","Aditya","Ashish","Harsh","Jasprit"];
				 }
				 else if(a==="Aditya"){
					var arr=["Mahendra","Ravindra","Vishal","Neel","Virat","Rishbh","Rohit","Rahul","Ashish","Harsh","Jasprit"];
				 }
				 else if(a==="Ashish"){
					var arr=["Mahendra","Ravindra","Vishal","Neel","Virat","Rishbh","Rohit","Rahul","Aditya","Harsh","Jasprit"];
				 }
				 else if(a==="Harsh"){
					var arr=["Mahendra","Ravindra","Vishal","Neel","Virat","Rishbh","Rohit","Rahul","Aditya","Ashish","Jasprit"];
				 }
				 else if(a==="Jasprit"){
					var arr=["Mahendra","Ravindra","Vishal","Neel","Virat","Rishbh","Rohit","Rahul","Aditya","Ashish","Harsh"];
				 }
                var string="";
             
                for(i=0;i<arr.length;i++)
                {
                    string=string+"<option value="+arr[i]+">"+arr[i]+"</option>";
                }
                document.getElementById("output").innerHTML=string;
            }
	</script>	
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
	<h1 style=" font-size:45px;color:#ffffff;text-shadow: 1.5px 1.5px black; background-color:#5D5C61; margin-top:5px; padding:5px;">Transfer Amount</h1><br>
	<div class="center">
	<form action="updatecredit.php" method="post">
		<label for="sender" align="left">Sender Name : </label><br>
		<select id="input" name="sender"style="font-size: 12pt; height: 28px; width:290px; color:#990000;" align="middle" onchange="random_function()">
			<option  selected>Select Name</option>
			<option value="Mahendra">Mahendra</option>
			<option value="Ravindra">Ravindra</option>
			<option value="Vishal">Vishal</option>
			<option value="Neel">Neel</option>
			<option value="Virat">Virat</option>
			<option value="Rishbh">Rishbh</option>
			<option value="Rohit">Rohit</option>
			<option value="Rahul">Rahul</option>
			<option value="Aditya">Aditya</option>
			<option value="Ashish">Ashish</option>
			<option value="Harsh">Harsh</option>
			<option value="Jasprit">Jasprit</option>
		</select><br><br>
		<label for="receiver" align="left">Receiver Name : </label><br>
		<select id="output" name="receiver"style="font-size: 12pt; height: 28px; width:290px; color:#990000;" align="middle" onchange="random_function1()" >
			<option>Select Name</option>
		</select><br><br>
		<label for="transfer" align="left">Amount : </label><br>
		<input type="number"  name="transfer" style="font-size: 12pt; height: 20px; color:#990000;" align="middle" required><br><br>
		<div class="button1">
		<input class="button" type="submit" name="submit" value="Transfer" style="height:40px; width:100px;">
		</div>
	</form> 
	</div><br><br><br>
</body>
</html>