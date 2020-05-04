<?php

if(isset($_POST['submit_click_val'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['name'];
    $message = $_POST['message'];

    if( empty($name) || empty($email) || empty($subject) || empty($message)){
        //have to error handle
    }
    else {
        require_once '../db/connection.php';

        $sql = "INSERT INTO contact_us_tb (user_name, user_email, subject, message ) VALUES ('$name', '$email', '$subject', '$message')";

        if ($connection->query($sql) === TRUE)
        {
        } else {
            //have to error handle
        }

         $connection->close();
    }
}

?>