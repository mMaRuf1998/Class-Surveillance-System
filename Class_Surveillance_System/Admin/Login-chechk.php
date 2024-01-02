<?php

    if(!isset($_SESSION['user'])){
        $_SESSION['no-login'] = "<div>You have to login to access Admin Panel.</div>";
        header('location:'.SITEURL.'logIn-admin.php/');
    }
?>