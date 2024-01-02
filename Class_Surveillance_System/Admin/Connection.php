<?php

    session_start();

    define('SITEURL','http://localhost/Class_Surveillance_System/');
    define('Lhost','localhost');
    define('DB_user','root');
    define('DB_password','');
    define('DB_Name','class_surveillance_system');

    $conn = mysqli_connect(Lhost,DB_user,DB_password) or die(mysqli_error());

    $select_db = mysqli_select_db($conn,DB_Name) or die(mysqli_error());
?>  
