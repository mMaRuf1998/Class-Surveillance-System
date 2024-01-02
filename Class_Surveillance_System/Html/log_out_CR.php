
<?php
include('../admin/Connection.php');
    session_destroy();
    header('location:'.SITEURL.'index.php');
?>