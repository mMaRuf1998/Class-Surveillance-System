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
    <title>New Update</title>
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
          ADD a New Update
        </div>
        <div class="form">
        <form action="" method="POST">
           
          <div class="inputfield">
              <label>Select Course</label>
              <div class="custom_select">
                <select name="code">
                  
                <?php
                $cr_id = $_SESSION['CR_ID'];
                $sql1 = "SELECT * FROM `semester_batch_info` WHERE CR_Id='$cr_id' ";


                $res1 = mysqli_query($conn,$sql1) or  die(mysqli_error());

                if($res1==true)
                {
                $count1 = mysqli_num_rows($res1);

                $sn =1;

                if($count1>0){
                    while($rows=mysqli_fetch_assoc($res1)){
                    $id = $rows['Id']; 
                    $code =$rows['Course_code'];
                      $title =$rows['Course_Title'];

                ?>
                <option value="<?php echo $code; ?>"><?php echo $code;
                                          echo " ";
                                          echo $title;
                                          ?></option>
                <?php }}} ?> 
                </select>
              </div>
           </div>  
            
           <div class="inputfield">
              <label>Scheduled Date</label>
              <input type="date" name="sdate" class="input">
           </div>  
           
           <div class="inputfield">
              <label>Scheduled Start Time</label>
              <input type="time" name="sstime" class="input">
           </div>  
          
           <div class="inputfield">
              <label>Scheduled End Time</label>
              <input type="time" name="setime" class="input">
           </div> 
           
           <div class="inputfield">
            <label>Real Start Time</label>
            <input type="time" name="rstime" class="input">
         </div>  
        
         <div class="inputfield">
            <label>Real End Time</label>
            <input type="time" name="retime" class="input">
         </div> 
              <div class="inputfield">
                  <label>Makeup Date</label>
                  <input type="date" name="makeup" class="input">
              </div>  
          
              <div class="inputfield">
              <label>Topic</label>
              <textarea class="textarea" name="topic"></textarea>
             </div> 
          
           <div class="inputfield">
              <label>Status</label>
              <div class="custom_select">
                <select name="status">
                  <option value="">Select</option>
                  <option value="Regular">Regular</option>
                  <option value="Pending">Pending</option>
                  <option value="Makeup">Makeup</option>
                  <option value="Cancelled">Cancelled</option>
                  <option value="Extra">Extra</option>
                </select>
              </div>
           </div> 

          <div class="inputfield">
            <input type="submit" value="Submit" name="submit" class="btn">
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
    

  $sql = "INSERT INTO course_details SET
      CR_Id = '$cr_id',
      Course_code = '$code',
      S_date = '$sdate',
      SS_time = '$sstime',
      SE_time = '$setime',
      RS_time = '$rstime',
      RE_time = '$retime',
      Makeup_date = '$makeup',
      Topic = '$topic',
      Status = '$status'
      
  ";

  $res = mysqli_query($conn,$sql) or  die(mysqli_error());

  if($res==true){
      $_SESSION['add'] = 'Course Update Successfully..';
      header("location:".SITEURL.'Html/cr_All_updates.php');
  }
  else{
      $_SESSION['add'] = 'Failed to add Course';
      header("location:".SITEURL.'Html/cr_All_updates.php');
  }
  }


  ?>

