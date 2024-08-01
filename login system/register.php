<?php 


if(isset($_POST["submit"]))
{
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    @include 'config.php';
    require "functions1.php";

    if(emptyInputSignup($email, $name, $password, $cpassword) !== FALSE) {
        header("location: register.php?error=emptyInput");
        exit();
    }
    if(invalidUid($name) !== FALSE) {
        header("location: register.php?error=Enter_Name");
        exit();
    }
    if(invalidEmail($email) !== FALSE) {
        header("location: register.php?error=Invalid_Email");
        exit();
    }
    if(pwdMatch($password, $cpassword) !== FALSE) {
        header("location: register.php?error=passwords_dont_match");
        exit();
    }
    if(uidExists($conn,$name, $email) !== FALSE) { 
        header("location: register.php?error=Email_taken");
        exit();
    }

    createUser($conn, $name, $email, $password);
}

// if(isset($_POST["submit"])) {
//     header("location: register.php?sucess");
//     $response = registerUser($_POST['email'],$_POST['name'],$_POST['password'],$_POST['cpassword']);
// }
?>
<html>
<head>
        <title>Music Player</title>
        <link rel="shortcut icon" href="../H_IMGAES/loginlogo.png" type="image/x-icon">
        <link rel="stylesheet" href="../css/register.css">
        <!-- jquery cdn  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!-- iconic.io  -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </head>
    <body>
    <div class="plai">
        <img src="../H_IMGAES/66.png" alt="">
    </div>
        <div class="container">
            <div class="logo">
                    <a href="../joinPage.php"><img src="../H_IMGAES/loginlogo.png"  style="width: 280;"  alt=""></a>
            </div>
                <hr>
            <!-- <div class="socials">
                    <a href="#">
                        <ion-icon name="logo-facebook"></ion-icon>
                        <span>Sign up with Facebook</span>
                    </a>
                    <a href="#">
                    <ion-icon name="logo-google"></ion-icon>
                        <span>Sign up with Google</span>
                    </a>  
            </div> -->
             <!-- <span class="or">OR</span> -->
            <form action="" method="POST"> 
                <?php 
                    if(isset($_GET["error"])) {
                        if($_GET["error"] == "emptyInput") {
                            echo "<span class='error'>Fill in all fields</span>";
                        } else if($_GET["error"] == "Enter_Name") {
                            echo "<span class='error'>!Enter Name</span>";
                        }
                        else if($_GET["error"] == "Invalid_Email") {
                            echo "<span class='error'>!Enter a valid email</span>";
                        }
                        else if($_GET["error"] == "passwords_dont_match") {
                            echo "<span class='error'>!passwords don't Match</span>";
                        }
                        else if($_GET["error"] == "stmt_failed") {
                            echo "<span class='error'>Something Went Wrong</span>";
                        }
                        else if($_GET["error"] == "Email_taken") {
                            echo "<span class='error'>!Email Address already exists</span>";
                        }
                        else if($_GET["error"] == "none") {
                            header("location: login.php");
                        }
                    }
                
                ?>
                <input type="text" placeholder="name"  name="name" value="<?php if(isset($_POST["name"])) {echo $_POST["name"];} ?>">
                <input type="email" placeholder="email"  name="email" value="<?php if(isset($_POST["email"])) {echo $_POST["email"];} ?>">
                <input type="password" placeholder="password"  name="password" value="<?php if(isset($_POST["password"])) {echo $_POST["password"];} ?>">
                <input type="password" placeholder="confirm password" name="cpassword">
                
            <!-- <div class="box">
                <select name="user_type" id="">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div> -->
                <!-- <div class="signed">
                    <input type="checkbox">
                    <span>keep me signed in</span>
                </div> -->
                <input type="submit" value="Register" name="submit" style="background-color: #874F41; color: white;" >
                       <a href="music_player.php">sad</a>
                <p>already have an account?<a href="login.php"    style="color: #874F41;"            > Log in</a> </p>
            </form>
        </div>
    </body>
</html>