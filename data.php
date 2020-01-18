<?php
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');
    $msg = filter_input(INPUT_POST, 'msg');
    if (validateInputFields($name, $emial, $msg)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "youtube";
        $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

        if (mysqli_connect_error()){
            die('Connect Error ('.mysqli_connect_errno().')');
        } else {
            $sql = "INSERT INTO acount (name, email, msg) values ('$name','$email','$msg')";
            if ($conn->query($sql)){
                echo "Aciu uz uzklausa, greit susisieksime!";
            } else{
                $format = 'Error: %s';
                echo sprintf($format, $conn->error);
            }
            $conn->close();
        }
    }

    function validateInputFields($name, $email, $message){
        return validateNameInput($name) && (validateEmailInput($email) && validateMessageInput($msg);
    }

    function validateNameInput($name) {
        if (empty($name)){
            echo "Name should not be empty";
            return false;
        }

        if (strlen($str1) > 20){
            echo "Name should not be under 20 characters";
            return false;
        }

        return true;
    }

    function validateEmailInput($email){
        if (empty($email)){
            echo "Email should not be empty";
            return false;
        }

        return true;
    }

    function validateMessageInput($message){
        if (empty($message)){
            echo "Message should not be empty";
            return false;
        }

        return true;
    }
?>