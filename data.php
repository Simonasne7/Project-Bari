<?php
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');
    $msg = filter_input(INPUT_POST, 'msg');
        if (!empty($name)){
        if (!empty($email)){
        if (!empty($msg)){
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "youtube";
    // Create connection
    $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
        if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '
        . mysqli_connect_error());
        }
            else{
            $sql = "INSERT INTO acount (name, email, msg)
            values ('$name','$email','$msg')";
            if ($conn->query($sql)){
            echo "Aciu uz uzklausa, greit susisieksim!";
            }
        else{
            echo "Error: ". $sql ."
            ". $conn->error;
            }
            $conn->close();
            }
        }
            else{
            echo "name should not be empty";
            die();
            }
        }
            else{
            echo "email should not be empty";
            die();
        }
        }
?>