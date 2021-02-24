    
	
	<div class="container m-6 p-3">
    <form action="" method="post" class="d-flex justify-content-around">
    <?php
    
    if(isset($_GET['update'])){
      $stdid = $_GET['update'];
      $query = "SELECT * FROM student WHERE id = {$stdid}";
      $getdata = mysqli_query($conn, $query);

      while($rx = mysqli_fetch_assoc($getdata)){
        $stdid = $rx['id'];
        $stdname = $rx['stdname'];
        $stdreg = $rx['stdreg'];
    
    ?>

    <input class="form-control" type="text" name="stdname" value="<?php echo $stdname ?>">
    <input class="form-control" type="number" name="stdreg" value="<?php echo $stdreg ?>">
    <input type="submit" value="Update" name="update" class="btn btn-success">

    <?php }} ?>

    <?php
    
    if(isset($_POST['update'])){
      $stdname = $_POST['stdname'];
      $stdreg = $_POST['stdreg'];

      $query = "UPDATE student SET stdname = '$stdname', stdreg = $stdreg WHERE id = $stdid";
      $updatequery = mysqli_query($conn, $query);

      if($updatequery){
        echo "Data Updated!";
      }

    }
    
    ?>

    </form>
    </div>