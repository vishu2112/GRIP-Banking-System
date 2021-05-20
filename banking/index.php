<html>
<head>
    <title>Basic Banking System</title>
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
		  width: 30%;
		  padding: 0 10px;
		  height : 100px;
		}

		/* Remove extra left and right margins, due to padding */
		.row {
			margin: 0 0px;
			margin-bottom: 30px;
			//height : 200px;
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
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8);
			max-width: 250px;
			background-color: grey;
			margin: auto;
			padding : 16px;
			text-align: center;
			font-family: arial;
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
		
		h1{
			font-family : "Showcard Gothic";
			text-decoration : "bold";
			font-size : 55px;
			color : #ff8c00;
			text-shadow : 2px 2px black;
			margin-top : 100px;
			margin-right : 200px;
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
	
       <center><h1>Welcome<br>To<br>Basic Banking System </h1></center>
	   <div id="section">
            
			<a href="userdetails.php">
				<div class="row">
				<div class="column">
				   <div class="card">
						<img src="multiuser1.jpg" alt="John" style="width:100%">
							<p><button id="button">VIEW USERS</button></p>
					</div>
				</div>
				</div>
            </a>
               
			
			<a href="transfer.php">
				<div class="row">
				<div class="column">
					<div class="card">
						<img src="moneytransfer.jpg" alt="John" style="width:100%">
							<p><button id="button">TRANSFER MONEY</button></p>
					</div>
				</div>
				</div>
			</a>	
			         
            <a href="transactionhistory.php">
				<div class="row">
				<div class="column">
					<div class="card">
						<img src="transactionhistory1.png" alt="John" style="width:100%">
							<p><button id="button">ALL TRANSACTION</button></p>
					</div>
				</div>
				</div>
            </a>
			  
    </div>
	
	           
</body>
</html>