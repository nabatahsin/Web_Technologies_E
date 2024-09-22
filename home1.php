<?php
require_once('../Models/alldb.php');
session_start();
if(empty($_SESSION['id']))
{
   header("location:log.php");
}
    $res=data();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
</head>
<body>
  <h1>Home Page</h1>
  welcome <?php echo $_SESSION['id'];?>
<br>
<?php 
if(isset($_SESSION['mess'])){
  echo $_SESSION['mess'];
  unset($_SESSION['mess']);
}
?>
    
    <table border="1">
      <tr>
        <th>Id</th>
         <th>Pass</th>
      </tr>
      <?php while ($r=$res->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $r['id']; ?></td>
        <td><?php echo $r['pass']; ?></td>
        
        <form action="../Controllers/homeController1.php">
        <td><button name="book" >BOOK CARS</button></td>
      </form>
      </tr>
 <?php } ?>
    </table>
   </form> 
    

  <form method="post" action="../Controllers/logCheckController.php">
    <button name="logout">Logout</button>
  </form>
   
</body>
</html>