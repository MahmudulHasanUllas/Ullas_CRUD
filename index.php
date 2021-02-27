
<?php

include 'db_connection.php';
include 'save.php';
include 'delete.php';
include 'update.php';


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>

  
  <form action="" method="post" align="center">
    <label for="fname">Enter Your Name: </label><br>
    <input type="text" id="stdname" name="stdname" value=""><br>
    <label for="lname">Enter Your reg No: </label><br>
    <input type="number" id="stdreg" name="stdreg" value=""><br>
    <label for="lname">Amount: </label><br>
    <input type="number" id="amount" name="amount" value=""><br><br>
    <input type="submit" value="Save" name="btn" class="btn btn-success">

    <div class="container p-5">
    <table style = "width:50%" align="center">
    <tr>
    <th>STD ID</th>
    <th>STD NAME</th>
    <th>REG NO</th>
    <th>AMOUNT</th>
    <th>ACTION</th>
    </tr>

   <?php 

    $payment = "SELECT student.id,student.stdname,student.stdreg,payment.amount FROM student LEFT JOIN payment ON student.id = payment.pay_id ";
    $readquery = mysqli_query($conn, $payment);
    if($readquery->num_rows >0){
      while($rd  = mysqli_fetch_assoc($readquery)){
        $stdid   = $rd['id'];
        $stdname = $rd['stdname'];
        $stdreg  = $rd['stdreg'];
        $amount  = $rd['amount'];
        
?>


<tr>
    <td><?php echo $stdid; ?></td>
    <td><?php echo $stdname; ?></td>
    <td><?php echo $stdreg; ?></td>
    <td><?php echo $amount; ?></td>
    <td><a href="index.php?update=<?php echo $stdid; ?>" class="btn btn-info">Update</a>
        <a href="index.php?delete=<?php echo $stdid; ?>" class="btn btn-danger">Delete</a>
    </td>
    
    </tr>

    <?php }} ?>

    </table>
    </div>
  </form> 



  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
