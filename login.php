<?php
    $login = false;
    $showError = false;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "selfanalysis";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_POST["username"];
        $pass = $_POST["password"]; 
        
        $sql = "Select * from userdata where name='$username' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        if ($num == 1){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: homepage.php");
        } 
        else{
            $showError = "Invalid Credentials";
        }
    }
?>