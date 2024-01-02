<?php

    include('../Admin/Connection.php');

    $C_id =$_GET['id'];

    $sql = "DELETE FROM course_details WHERE Id=$C_id";

    $res = mysqli_query($conn,$sql);

    if($res==true){
            $_SESSION['delete'] = 'Course Deleted Successfully';
            header("location:".SITEURL.'Html/cr_All_updates.php');
    }
    else{
        $_SESSION['delete'] = 'Course delete Unsuccessful';
        header("location:".SITEURL.'Html/cr_All_updates.php');
    }

?>