<?php include('../Admin/Connection.php'); 
include('./Login-chechk_CR.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style1.css">
    <link rel="stylesheet" href="../Css/style.css">
    <title>Edit Course</title>
</head>
<body>

  <section class="header">
    <div class="hTitle">
        <p>Class Surveillance System</p>
    </div>
    <div class="menubar1">
      
    <a href="./CR_index.php">Home</a>
    <a href="./cr_All_updates.php">Upload</a>
    <a href="./log_out_CR.php">Log Out</a>
    </div>
</section>
    <div class="wrapper">
        <div class="title">
          Edit Course
        </div>
        <div class="form">
        <form action="" method="POST">
           
          <?php
          $C_id =$_GET['id'];
            $sql1 = "SELECT * FROM course_details WHERE Id='$C_id' ";
       
               
            $res1 = mysqli_query($conn,$sql1) or  die(mysqli_error());
            
            if($res1==true)
            {
               $count1 = mysqli_num_rows($res1);
               
               $sn =1;
    
               if($count1>0){
                  while($rows=mysqli_fetch_assoc($res1)){

                    $code2 =$rows['Course_code'];
                    $s_date =$rows['S_date'];
                    $ss_time =$rows['SS_time'];
                    $se_time = $rows['SE_time'];
                    $rs_time = $rows['RS_time'];
                    $re_time = $rows['RE_time'];
                    $make_up = $rows['Makeup_date'];
                    $Topic = $rows['Topic'];
                    $Status = $rows['Status'];

                
                
                  }}}        
                ?> 
            <label for=""><?php echo $code2; ?></label>
           <div class="inputfield">
              <label>Scheduled Date</label>
              <input type="date" name="sdate" value="<?php echo $s_date; ?>" class="input">
           </div>  
           
           <div class="inputfield">
              <label>Scheduled Start Time</label>
              <input type="time" name="sstime" value="<?php echo $ss_time; ?>" class="input">
           </div>  
          
           <div class="inputfield">
              <label>Scheduled End Time</label>
              <input type="time" name="setime" value="<?php echo $se_time ;?>" class="input">
           </div> 
           
           <div class="inputfield">
            <label>Real Start Time</label>
            <input type="time" name="rstime" value="<?php echo $rs_time ;?>" class="input">
         </div>  
        
         <div class="inputfield">
            <label>Real End Time</label>
            <input type="time" name="retime" value="<?php echo $re_time; ?>" class="input">
         </div> 
              <div class="inputfield">
                  <label>Makeup Date</label>
                  <input type="date" name="makeup" value="<?php echo $make_up; ?>" class="input">
              </div>  
          
              <div class="inputfield">
              <label>Topic</label>
              <textarea class="textarea" name="topic"><?php echo $Topic; ?></textarea>
             </div> 
          
           <div class="inputfield">
              <label>Status</label>
              <div class="custom_select">
                <select name="status" >
                  <option value="">Select</option>
                  <option value="Regular" <?php if ($Status == "Regular") echo "selected"; ?>>Regular</option>
                  <option value="Pending" <?php if ($Status == "Pending") echo "selected"; ?>>Pending</option>
                  <option value="Makeup" <?php if ($Status == "Makeup") echo "selected"; ?>>Makeup</option>
                  <option value="Cancelled" <?php if ($Status == "Cancelled") echo "selected"; ?>>Cancelled</option>
                  <option value="Extra" <?php if ($Status == "Extra") echo "selected"; ?>>Extra</option>
                </select>
              </div>
           </div> 

          <div class="inputfield">
            <input type="submit" value="Update" name="submit" class="btn">
            <a href="<?php echo SITEURL;?>Html/delete_course.php?id=<?php echo $C_id?>" class="btn">Delete</a>
          </div>
          </form>
        </div>
    </div>	
</body>
</html>




<?php

  if(isset($_POST['submit'])){
    $code = $_POST['code'];
    $sdate = $_POST['sdate'];
    $sstime = $_POST['sstime'];
    $setime = $_POST['setime'];
    $rstime = $_POST['rstime'];
    $retime = $_POST['retime'];
    $makeup = $_POST['makeup'];
    $topic = $_POST['topic'];
    $status = $_POST['status'];
    

  $sql = "UPDATE course_details SET
      S_date = '$sdate',
      SS_time = '$sstime',
      SE_time = '$setime',
      RS_time = '$rstime',
      RE_time = '$retime',
      Makeup_date = '$makeup',
      Topic = '$topic',
      Status = '$status'

      WHERE Id='$C_id'
      
  ";

  $res = mysqli_query($conn,$sql) or  die(mysqli_error());

  if($res==true){
      $_SESSION['course'] = 'Course Edit Successfully..';
      header("location:".SITEURL.'Html/cr_All_updates.php');
  }
  else{
      $_SESSION['course'] = 'Failed to edit Course';
      header("location:".SITEURL.'Html/cr_All_updates.php');
  }
  }


  ?>

