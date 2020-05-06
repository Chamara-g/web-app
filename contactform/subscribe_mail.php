<?php

if(isset($_POST['subscribe_click'])){

    $name = $_POST['subscribe_name'];
    $email = $_POST['subscribe_email'];

    if( empty($name) ){
        $name = '';
    }

    if( empty($email) ){
        //have to error handle
    }
    else {
        require_once '../db/connection.php';

        $sql = "INSERT INTO subscribe_list_tb (user_name, user_email) VALUES ('$name', '$email')";

        if ($connection->query($sql) === TRUE){
            echo "ok";
        } else {
            //have to error handle
            echo "error";
        }

         $connection->close();
    }
}

?>