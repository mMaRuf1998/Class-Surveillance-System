<?php include('Connection.php'); ?>
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
        <h1 style="color: #0019ba;">Login as Admin</h1>
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
            <input type="text" name="email" class="input" placeholder="Enter your mail">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password" class="input">
            <input type="submit" name="submit" value="Login">
            <div class="text_deco">
                <b class="bold">Forgot password?</b>
                <a href="../Html/Password_recovery.html">Click Here</a>
                <br>
            </div>
           
    
        </form>
    </div>
</body>
</html>


<?php

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        $sql = "SELECT *FROM admin WHERE Email='$email' AND Password='$password' ";
    
        $res = mysqli_query($conn,$sql);

        $count = mysqli_num_rows($res);

        if($count == 1){
            $_SESSION['login'] = "<div>Log in Successfully.</div>";
            header('location:'.SITEURL.'Admin/admin_index.php');
            $_SESSION['user'] = $email;
        }

        else{
            $_SESSION['login'] = "<div>Email or Password does not match.</div>";
            header('location:'.SITEURL.'Admin/login_page_Admin.php');
        }
    }
?>