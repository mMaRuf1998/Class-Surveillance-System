<?php

    include('Connection.php');

    $id =$_GET['id'];

    $sql = "DELETE FROM admin WHERE ID=$id";

    $res = mysqli_query($conn,$sql);

    if($res==true){
            $_SESSION['delete'] = 'Admin Deleted Successfully';
            header("location:".SITEURL.'/Admin/manage_admin.php');
    }
    else{
        $_SESSION['delete'] = 'Failed to delete Admin';
        header("location:".SITEURL.'/Admin/manage_admin.php');
    }

?>