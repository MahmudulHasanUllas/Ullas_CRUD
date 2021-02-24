<?php

if(isset($_GET['delete'])){
  $stdid = $_GET['delete'];
  $query = "DELETE FROM student WHERE id = {$stdid}";
  $deletequery = mysqli_query($conn, $query);
  if($deletequery){
    echo "Data Remove Successfully!";
  }
}

?>