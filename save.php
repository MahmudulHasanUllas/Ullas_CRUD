<?php

if (isset($_POST['btn'])) {
    
    $stdname = $_POST['stdname'];
    $stdreg = $_POST['stdreg'];
    $amount = $_POST['amount'];

    if (!empty($stdname) && !empty($stdreg)) {
        $query = "INSERT INTO student(stdname,stdreg) VALUE('$stdname', $stdreg)";
        $createquery = mysqli_query($conn, $query);
        if($createquery==1){
            $stdid = mysqli_insert_id($conn);
            $payment = "INSERT INTO payment(pay_id,stdname,amount) VALUES ($stdid,'$stdname',$amount)";
            $paymentquery = mysqli_query($conn, $payment);
        }


        if ($createquery) {
            echo "Save Successfully!";
        }
    } else {
        echo "Field should not be empty!";
    }

}

?>