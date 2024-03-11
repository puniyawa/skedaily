<?php
include 'db_conn.php';
if(isset($_POST['username']) && $_POST['password']){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);
    if(empty($username)){
        header("Location: ../index.php?error=Please type a $usernametype ID to continue");
    }
    elseif(empty($password)){
        header("Location: ../index.php?error=Please type a Password to continue");
    }
    else{
        // SUCCESS
        $sql = "SELECT * FROM `account` WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        
        if(!isset($row)) {
            // The given ID is not found in the table
            header("Location: ../index.php?error=Given ID not found");
            return;
        }

        if ($row['password'] != $password){
            header("Location: ../index.php?error=Wrong Password");
        }
        else{
            header("Location: ../home.php?uid=$username");
        }
    }
}
else {
    header("Location: ../index.php?error");
}

?>