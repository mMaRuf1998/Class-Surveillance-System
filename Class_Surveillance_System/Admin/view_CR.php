<?php
include('./Connection.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style.css">
    <link rel="stylesheet" href="../Css/style1.css">
    <title>View CR</title>
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
        <h1>CR List</h1>
    </section>

    <section class="view">
        <div class="viewBox">
        <?php
            
        $id =$_GET['id'];
            $sql = "SELECT * FROM `cr_info` WHERE Id ='$id'";
            $res = mysqli_query($conn,$sql);
            if($res==true)
            {
               $count = mysqli_num_rows($res);
               
               $sn =1;

               if($count>0){
                  while($rows=mysqli_fetch_assoc($res)){
                    $Name =$rows['Name'];
                    $Lname =$rows['Last_name'];
                    $email =$rows['Email'];
                    $gender = $rows['Gender'];
                    $number =$rows['Number'];
                    $roll =$rows['Roll'];
                    $semester =$rows['Semester'];
                    $batch =$rows['Batch'];
                     ?>
        
            <form action="" method="POST">
            <div class="viewPart">
                <span>ID</span> <input type="text" value="<?php echo $id; ?>">
            </div>
            <div class="viewPart">
                <span>Name</span> <input type="text" value="<?php echo $Name; ?>">
            </div>

            
            <div class="viewPart">
                <span>Last Name</span> <input type="text" value="<?php echo $Lname; ?>">
            </div>

            
            <div class="viewPart">
                <span>Email</span> <input type="text" value="<?php echo $email; ?>">
            </div>

            
            <div class="viewPart">
                <span>Gender</span> <input type="text" value="<?php echo $gender; ?>">
            </div>

            
            <div class="viewPart">
                <span>Number</span> <input type="text" value="<?php echo $number; ?>">
            </div>

            
            <div class="viewPart">
                <span>Roll</span> <input type="text" value="<?php echo $roll; ?>">
            </div>

            
            <div class="viewPart">
                <span>Semester</span> <input type="text" value="<?php echo $semester; ?>">
            </div>

            
            <div class="viewPart">
                <span>Batch</span> <input type="text" value="<?php echo $batch; ?>">
            </div>
                <br> 
               <a href="<?php echo SITEURL;?>Admin/delete_CR.php?id=<?php echo $id?>" class="btn">Delete</a>
           </form>
        </div>

        <div class="viewBox">
            <table class="tt" class="center">
                <tr>
                 <th class="title2">Course Code <p>(ex:- ICT-xxxx)</p></th>
                 <th class="title2">Course Title <p>(ex:- Database Management System)</p></th>
                 <th class="title2">Course Teacher <p>(ex:- FKP)</p></th>
                </tr>
                                                 
     
                <?php
                  $sql1 = "SELECT * FROM semester_batch_info WHERE CR_Id='$id' ";
             
                     
                  $res1 = mysqli_query($conn,$sql1) or  die(mysqli_error());
                  
                  if($res1==true)
                  {
                     $count1 = mysqli_num_rows($res1);
                     
                     $sn =1;
          
                     if($count1>0){
                        while($rows=mysqli_fetch_assoc($res1)){
                          $code1 =$rows['Course_code'];
                          $title1 =$rows['Course_Title'];
                          $teacher1 =$rows['Course_Teacher'];
                 
                ?>
                <tr>
                 <td><input type="text" class="input2" value="<?php echo $code1?>"></td>
                 <td><input type="text" class="input2" value="<?php echo $title1?>"></td>
                 <td><input type="text" class="input2" value="<?php echo $teacher1?>"></td>
                </tr>
     
                <?php 
                   }
                 }
                }
                ?>
             </table>

             
             <?php 
                   }
                 }
                }
                ?>
        </div>
    </section>
</body>
</html>