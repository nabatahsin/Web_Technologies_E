<?php
require_once('../Models/alldb.php');
session_start();

    $res1=data1();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Cars</title>
</head>
<body>
  <h1>Car Collection</h1>

    
    <table border="1">
      <tr>
        <th>Car Id</th>
         <th>Model</th>
      </tr>
      <?php while ($r1=$res1->fetch_assoc()) { ?>
      <tr>
        <td><?php echo $r1['c_id']; ?></td>
        <td><?php echo $r1['model']; ?></td>
        
        <form method="post" action=" ">
        <td><button name="confirm" >Confirm</button></td>

      </form>
      </tr>
 <?php } ?>
    </table>
   </form> 
   
</body>
</html>