<?php include('../Admin/Connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style.css">
    <title>View Course</title>
</head>
<body>
    <section class="header">
      <div class="hTitle">
        <a href="./CR_index.php">Home</a>
        <a href="./CR_index.php">About</a>
        <a href="./CR_index.php">Contact</a>
      </div>
      <div class="menubar1">
        
      <a href="./CR_index.php">Home</a>
        <a href="./cr_All_updates.php">Upload</a>
        <a href="./log_out_CR.php">Log Out</a>
      </div>
    </section>
    <?php
            $id = $_GET['id'];
            $mail = $_SESSION['user'];

            $sql = "SELECT * FROM course_details WHERE Id='$id' ";
            $res = mysqli_query($conn,$sql);
            if($res==true)
            {
               $count = mysqli_num_rows($res);
               
               $sn =1;

               if($count>0){
                  while($rows=mysqli_fetch_assoc($res)){

                     $code = $rows['Course_code'];
                     $sdate = $rows['S_date'];
                     $sstime = $rows['SS_time'];
                     $setime = $rows['SE_time'];
                     $rstime = $rows['RS_time'];
                     $retime = $rows['RE_time'];
                     $makeup = $rows['Makeup_date'];
                     $topic = $rows['Topic'];
                     $status = $rows['Status'];
                     ?>


    <section class="view">
        <div class="viewBox">
        
            <form action="" method="POST">
            <div class="viewPart">
                <span>Course Code</span> <span><?php echo $code; ?></span>
            </div>

            <div class="viewPart">
                <span>Scheduled Date</span> <span><?php echo $sdate;?></span>
            </div>

            <div class="viewPart">
                <span>Scheduled Start Time</span> <span><?php echo $sstime;?></span>
            </div>

            <div class="viewPart">
                <span>Scheduled End Time</span> <span><?php echo $setime;?></span>
            </div>

            
            <div class="viewPart">
                <span>Real Start Time</span> <span><?php echo $rstime;?></span>
            </div>
            
            <div class="viewPart">
                <span>Real End Time</span> <span><?php echo $retime;?></span>
            </div>

            <div class="viewPart">
                <span>Makeup Date</span> <span><?php echo $makeup;?></span>
            </div>

            <div class="viewPart">
                <span>Topic</span> <span><?php echo $topic;?></span>
            </div>

            <div class="viewPart">
                <span>Status</span> <span><?php echo $status;?></span>
            </div>
            
                <br> 
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

