<?php
session_start();
require_once('../Models/alldb.php');

 if(isset($_GET['book']))
 {
    header("location:../Views/home2.php");
    echo "Car is being selected";
  }
 
?>
