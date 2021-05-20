<?php
session_start();
$con=mysqli_connect('localhost','root','','userdetails');
$name1=$_SESSION['name'];
$q="select curr_balance from customer where user_name='$name1'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$var=$row['curr_balance'];
$from=$_SESSION['name'];
$to=$_POST['receiver'];
$q1="select curr_balance from customer where user_name='$to'";
$result1=mysqli_query($con,$q1);
$row=mysqli_fetch_array($result1);
$var1=$row['curr_balance'];
session_destroy();
if ( $var >= $_POST["transfer"] )
{
    $sub=$var-$_POST["transfer"];
    $q="update customer set curr_balance='$sub' where user_name='$from' ";
    $result=mysqli_query($con,$q);
    $sum=$var1+$_POST["transfer"];
    $q="update customer set curr_balance='$sum' where user_name='$to' ";
    $result=mysqli_query($con,$q);
	$c=$_POST["transfer"];
	$q="insert into mini(sender,receiver,amount)values('$from','$to',$c)";
	$result=mysqli_query($con,$q);
    include 'userdetails.php';
    $message="Successful transfer";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
   
    
}
else
{
	include 'userdetails.php';
    $message="Insufficient Balance";
   echo"<script type='text/javascript'>alert('$message');
   </script>";
   //$_SESSION['name'] = "vishal";
}
?>