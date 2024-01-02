<?php include('Connection.php'); 
      include('Login-chechk.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style.css">
    <title>Manage Admin</title>
</head>
<body>
    <section class="header">
        <div class="hTitle">
            <p>Class Surveillance System</p>
        </div>
        <div class="menubar">
        <a href="./admin_index.php">Home</a>
            <a href="./profile.php">Profile</a>
            <a href="./manage_CR.php">Manage CR</a>
            <a href="./manage_admin.php">Manage Admin</a>
            <a href="#">Report</a>
            <a href="./log_out_Admin.php">Log Out</a>
        </div>
    </section>
    <section class="mainCR">
        <h1>Manage Admin</h1>
            <br>
            <h6>
                <?php
         if(isset($_SESSION['add']))
         {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
         }
         if(isset($_SESSION['delete']))
         {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
         }
         ?>
        </h6>

        <a href="./add_admin.html" class="btn1">Add Admin</a>
        </div>
    </section>


    <section class="CR">
        <h1>Admin List</h1>
        <div class="CRINfoH">
                <a>Name</a>
                <a>Designation</a>
                <a>Email</a>
                <a>Number</a>
                <a>Action</a>
        </div>
        <?php
            $sql = "SELECT * FROM admin";
            $res = mysqli_query($conn,$sql);
            if($res==true)
            {
               $count = mysqli_num_rows($res);
               
               $sn =1;

               if($count>0){
                  while($rows=mysqli_fetch_assoc($res)){
                    $id = $rows['Id'];
                     $Name = $rows['Name'];
                     $LName = $rows['Last_name'];
                     $Desi = $rows['Designation'];
                     $email = $rows['Email'];
                     $number = $rows['Number'];
                     ?>
         
        <div class="CRINfo">
                <li><?php echo $Name; ?></li>
                <li><?php echo $Desi; ?></li>
                <li><?php echo $email; ?></li>
                <li><?php echo $number; ?></li>
                <li class="actionBtn">
                    <a href="<?php echo SITEURL;?>Admin/view_Admin.php?id=<?php echo $id?>">View</a>
                </li>
        </div>
        <?php
                  }
               }
         

         
            }

         ?>
    </section>
</body>
</html>