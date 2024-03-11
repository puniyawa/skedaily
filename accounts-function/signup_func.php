<?php
include 'db_conn.php';
if(isset($_POST['username']) && $_POST['password'] && $_POST['retypePassword']){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    $retypePass = validate($_POST['retypePassword']);
    if(empty($username)){
        header("Location: ../signup.php?error=Please type a $usernametype ID to continue");
    }
    elseif(empty($password)){
        header("Location: ../signup.php?error=Please type a Password to continue");
    }
    elseif(empty($retypePass)){
        header("Location: ../signup.php?error=Please type a Password to continue");
    }
    else{
        // SUCCESS

        // DETECT IF USERNAME IS ALREADY IN THE DATABASE
        $sql = "SELECT * FROM `account` WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        
        if(isset($row)) {
            // The given ID is found in the table
            header("Location: ../signup.php?error=Username is already taken");
        }

        if($password != $retypePass){
            header("Location: ../signup.php?error=Password is not the same as your retyped password");
        }

        // CREATE ACCOUNT 

        
        $sql = "INSERT INTO `account`(`username`, `password`) VALUES ('$username','$password');";
        $result = mysqli_query($conn, $sql);
        echo $sql;
        header("Location: ../home.php?uid=$username");
    }
}
else {
    header("Location: ../signup.php?error");
}

?>