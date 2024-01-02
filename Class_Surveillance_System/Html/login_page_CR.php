<?php

    include('../Admin/Connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Css/style1.css">
    <title>Login Page</title>
</head>
<body class="bb">
    <div class="loginbox">
        <img src="../image/user1.png" alt="" class="avatar">
        <h1 style="color: #0c21ae;">Login as CR</h1>
        <?php
        if(isset($_SESSION['login'])){
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        }
        if(isset($_SESSION['no-login'])){
         echo $_SESSION['no-login'];
         unset($_SESSION['no-login']);
     }
        ?>
      
        <form action="" method="POST">
            <p>Email</p>
            <input type="text" class="input" name="email" placeholder="Enter your mail">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" class="input">
            <input type="submit" name="submit" value="Login">
            <div class="text_deco">
                <b class="bold">Forgot password?</b>
                <a href="./Html/Password_recovery.html">Click Here</a>
                <br>
                <b class="bold">Don't have any account?</b>
                <a href="./Html/cr_register.php">Sign Up</a>
                <br>
                <b class="bold">Administrative Purpose</b>
                <a href="../Admin/login_page_Admin.php">Admin LogIn</a>
            </div>
           
    
        </form>
    </div>
</body>
</html>



<?php

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql = "SELECT *FROM cr_info WHERE Email='$email' AND Password='$password' ";
    
        $res = mysqli_query($conn,$sql);

        $count = mysqli_num_rows($res);

        if($count == 1){
            $_SESSION['login'] = "Log in Successfully.";
            $rows=mysqli_fetch_assoc($res);
            $id = $rows['Id'];
            $_SESSION['CR_ID'] = $id;
            header('location:'.SITEURL.'Html/CR_index.php');
        }

        else{
            $_SESSION['login'] = "Email or Password does not match.";
            header('location:'.SITEURL.'Html/login_page_CR.php');
        }
    }
?>