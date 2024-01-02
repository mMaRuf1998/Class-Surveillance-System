<?php

    if(!isset($_SESSION['CR_ID'])){
        $_SESSION['no-login'] = "<div>You have to login to access as CR.</div>";
        header('location:'.SITEURL.'Html/logIn_page_CR.php/');
    }
?>