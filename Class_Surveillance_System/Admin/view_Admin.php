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
    <title>View Admin</title>
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
    <?php
            $id =$_GET['id'];
            $sql = "SELECT * FROM admin WHERE Id='$id' ";
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
                     $gender = $rows['Gender'];
                     ?>
        <h1><?php echo $LName;?></h1>
        <p><?php if(isset($_SESSION['update']))
         {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
         } ?> </p>
    </section>

    <section class="view">
        <div class="viewBox">
        
            <form action="" method="POST">
            <div class="viewPart">
                <span>First Name</span> <input name="Name" value="<?php echo $Name; ?>" type="text" required>
            </div>

            <div class="viewPart">
                <span>Last Name</span> <input name="LName" value="<?php echo $LName; ?>" type="text" required>
            </div>

            <div class="viewPart">
                <span>Designation</span> <input name="Desi" value="<?php echo $Desi; ?>" type="text" required>
            </div>

            
            <div class="viewPart">
                <span>Gender</span> 
                <select name="Gender_select">
                  <option value="" >Select</option>
                  <option value="male" <?php if ($gender == "male") echo "selected"; ?> >Male</option>
                  <option value="female" <?php if ($gender == "female") echo "selected"; ?> >Female</option>
                </select>
            </div>
            
            <div class="viewPart">
                <span>Email</span> <input name="email" value="<?php echo $email; ?>" type="text" required>
            </div>

            
            <div class="viewPart">
                <span>Phone Number</span> <input name="number" value="<?php echo $number; ?>" type="text" required >
            </div>

            
                <br> 
            <input type="submit" name="submit" value="Update" class="btn">
            <a href="<?php echo SITEURL;?>Admin/delete_Admin.php?id=<?php echo $id?>"  class="btn">Delete</a>
            </form>
        </div>
        <?php
                  }
               }
         

         
            }

         ?>
    </section> 
</body>
</html>



<?php
    if(isset($_POST['submit'])){
      echo  $ke = $_POST['id'];
      echo  $Name = $_POST['Name'];
      echo  $Lname = $_POST['LName'];
      echo  $Desi = $_POST['Desi'];
      echo  $email = $_POST['email'];
      echo  $number = $_POST['number'];
      echo $gender = $_POST['Gender_select'];

    $sql = "UPDATE admin SET
    Name = '$Name',
    Last_name = '$Lname',
    Designation = '$Desi',
    Gender = '$gender',
    Number = '$number',
    Email = '$email',
    Password = '$password'

    WHERE Id='$id'
    ";
    

    $res = mysqli_query($conn,$sql);

    if($res==true){
        $_SESSION['update'] = 'Admin Updated Successfully';
        header("location:".SITEURL.'Admin/view_Admin.php?id='.$id);
}
else{
    $_SESSION['update'] = 'Failed to update Admin';
    header("location:".SITEURL.'Admin/view_Admin.php??id='.$id);
}
    }
?>
