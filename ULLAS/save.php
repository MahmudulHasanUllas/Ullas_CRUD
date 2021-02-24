<?php

if (isset($_POST['btn'])) {
    $stdname = $_POST['stdname'];
    $stdreg = $_POST['stdreg'];

    if (!empty($stdname) && !empty($stdreg)) {
        $query = "INSERT INTO student(stdname,stdreg) VALUE('$stdname', $stdreg)";
        $createquery = mysqli_query($conn, $query);
        if ($createquery) {
            echo "Save Successfully!";
        }
    } else {
        echo "Field should not be empty!";
    }

}

?>