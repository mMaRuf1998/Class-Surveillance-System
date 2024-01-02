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
    <title>Manage CR</title>
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
        <h1>Manage CR</h1>
        <div class="searchBox">
            <form action="">
            <a href="./pending_CR.php" class="btn">Pending CR List</a>
        
        </div>
    </section>
    <section class="CR">
        <h1>CR List</h1>
        <div class="CRINfoH">
                <a>Name</a>
                <a>Semester</a>
                <a>Batch</a>
                <a>Email</a>
                <a>Number</a>
                <a>Action</a>
        </div>

    <?php
            $sql = "SELECT * FROM `cr_info`";
            $res = mysqli_query($conn,$sql);
            if($res==true)
            {
               $count = mysqli_num_rows($res);
               
               $sn =1;

               if($count>0){
                  while($rows=mysqli_fetch_assoc($res)){
                    $id = $rows['Id'];
                    $Name =$rows['Name'];
                    $Lname =$rows['Last_name'];
                    $email =$rows['Email'];
                    $gender = $rows['Gender'];
                    $number =$rows['Number'];
                    $roll =$rows['Roll'];
                    $semester =$rows['Semester'];
                    $batch =$rows['Batch'];
                     ?>
        

        <div class="CRINfo">
                <li><?php echo $Name ?></li>
                <li><?php echo $semester ?></li>
                <li><?php echo $batch ?></li>
                <li><?php echo $email ?></li>
                <li><?php echo $number ?></li>
                <li class="actionBtn">
                <a href="<?php echo SITEURL;?>Admin/view_CR.php?id=<?php echo $id?>">View</a>
           
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