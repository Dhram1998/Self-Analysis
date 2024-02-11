<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // Retrieve form data
        $name = $_POST['fname'];
        $number = $_POST['fphone'];
        $email = $_POST['femail'];
        $pass = $_POST['fpass'];
        $fcpass = $_POST['fcpass'];
        $gender = $_POST['gender'];
        $states = $_POST['state'];

        // Database connection parameters
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "selfanalysis";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        $exists=false;
        if(($pass == $fcpass) && $exists==false){
            $sql = "INSERT INTO userdata (name, number, email, password, gender, states) VALUES ('$name', '$number', '$email', '$pass', '$gender', '$states')";

            if($conn->query($sql) === TRUE) {
                echo "Record inserted successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        else{
            echo "Passwords do not match";
        }
        $conn->close();
    }
?>