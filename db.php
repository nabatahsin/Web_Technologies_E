<?php

  function con()
  {
  	$serverName="localhost";
  	$userName="root";
  	$pass="";
  	$dbName="car";
  	$conn=new mysqli($serverName,$userName,$pass,$dbName);
  	return $conn;
  }

?>