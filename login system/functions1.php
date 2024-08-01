<?php

// require 'config.php';


// function connect(){
//     $mysqli = new mysqli("localhost","root","","music");
//     if($mysqli -> connect_errno != 0)
//     {
//         $error = $mysqli -> connect_error;
//         $error_date = date('F j, Y, g:i a');
//         $message = "{$error} | {$error_date} \r\n";
//         file_put_contents("db-log.txt", $message, FILE_APPEND);
//         return false;
//     }else {
//         return $mysqli;
//     }

// }




function emptyInputSignup($email, $name, $password, $cpassword){
        //  $result;
         if(empty($name) || empty($email) || empty($password) || empty($cpassword)) {
            $result = true;
         } else {
            $result = false;
         }
         return $result;

}




function invalidUid($name){
    // $result;
    $pattern = "/^[a-zA-Z]*$/";
    if(!preg_match($pattern, $name)) {
       $result = true;
    } 
    else {
       $result = false;
    }
    return $result;

}


function invalidEmail($email){
    // $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $result = true;
    } 
    else {
       $result = false;
    }
    return $result;

}

function pwdMatch($password, $cpassword){
    // $result;
    if($password !== $cpassword) {
       $result = true;
    } 
    else {
       $result = false;
    }
    return $result;

}
function uidExists($conn, $name, $email){
    $sql = "SELECT * FROM registration WHERE username = ? || email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: register.php?error=user_exists");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $name,  $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}







function createUser($conn, $name, $email, $password){
    $sql = "INSERT INTO registration (username, email, password) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: register.php?error=stmt_failed");
        exit();
    }

    $hashedpwd = password_hash($password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sss",  $name, $email, $hashedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: login.php?error=success registration");
    exit();

}



function emptyInputLogin($name, $password) {
    if(empty($name) || empty($password)) {
        $result = true;
     } else {
        $result = false;
     }
     return $result;
}

function handleCookie($conn, $name) {
    $uidExists = uidExists($conn, $name, $name);
    session_start();
    $_SESSION["username"] = $uidExists["username"];
    $_SESSION["email"] = $uidExists["email"];
    header("location: ../music_player/index.php");
    exit();
}



function loginUser($conn, $name, $password) {
    $uidExists = uidExists($conn, $name, $name);

    if($uidExists === false) {
        header("location: login.php?error=wrong_name");
        exit();
    }

    $passHashed = $uidExists["password"];
    $check = password_verify($password, $passHashed);

    if($check === false) {
        header("location: login.php?error=wrong_password");
        exit();
    } else if($check === true) {
        session_start();
        $_SESSION["username"] = $uidExists["username"];
        $_SESSION["email"] = $uidExists["email"];

        if(isset($_POST['remember'])) {
            setcookie('login', $uidExists["email"], time() + 60 * 10, '/');
        }
        header("location: ../music_player/index.php");
        exit();
    }
}

