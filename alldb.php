<?php
require_once('db.php');
  
function auth($id,$pass)
{
	$conn=con();
	$sql="select * from customer where id='$id' and pass='$pass'";
	$res=mysqli_query($conn,$sql);
	return $res;
}
function auth1($id,$pass)
{
	$conn=con();
	$sql2="select * from admin where id='$id' and pass='$pass'";
	$res=mysqli_query($conn,$sql2);
	return $res;
}
function data()
{
	$conn=con();
	$sql1="select * from customer";
	$res1=mysqli_query($conn,$sql1);
	return $res1;
}

function data1()
{
	$conn=con();
	$sql1="select * from cars";
	$res1=mysqli_query($conn,$sql1);
	return $res1;
}


?>