<?php

    include('Connection.php');

    $id =$_GET['id'];

    $sql = "DELETE FROM temp WHERE ID=$id";

    $res = mysqli_query($conn,$sql);


    if($res==true){
            $_SESSION['delete'] = 'CR Deleted Successfully';
            header("location:".SITEURL.'/Admin/manage_CR.php');
    }
    else{
        $_SESSION['delete'] = 'CR to delete Unsuccessful';
        header("location:".SITEURL.'/Admin/manage_CR.php');
    }

?>