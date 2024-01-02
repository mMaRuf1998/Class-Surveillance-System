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
    <title>All updates</title>
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


<?php
            $cr_id = $_SESSION['CR_ID'];
             $sql1 = "SELECT * FROM cr_info WHERE Id='$cr_id' ";
        
                
             $res1 = mysqli_query($conn,$sql1) or  die(mysqli_error());
             
             if($res1==true)
             {
                $count1 = mysqli_num_rows($res1);
                
                $sn =1;
     
                if($count1>0){
                   while($rows=mysqli_fetch_assoc($res1)){
                     $semester =$rows['Semester'];
                     $batch =$rows['Batch'];
            
?>
    <div class="wrapper3">
          <h2 style="color: blue;" class="pp"><b>Semester: <?php echo $semester; ?> </b> </h2>
          <br>
          <h2 style="color: blue;" class="pp"><b>Batch: <?php echo $batch; ?></b></h2>
<?php
                   }}}
?>
          <br>
          <hr>
          <br>
          <br>
          <div class="concatenate">
            <h3 style="color: darkgreen;"><b>All Updates</b></h3>
            <div class="custom_select">
              <select>
                <option value="">Filter by Course</option>
                
<?php
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
                <option value="<?php echo $id; ?>"><?php echo $code;
                                         echo " ";
                                         echo $title;
                                         ?></option>
            <?php }}} ?>  
            </select>

            </div>
            <button class="update_button" onclick="window.location.href='./cr_New_update.php';">Add a new update</button>
          </div>
           <br>
           <br>
          <table class="tt" class="center">
            <tr>
             <th class="title2">Course Details</th>
             <th class="title2">Scheduled Date</th>
             <th class="title2">Scheduled Start Time</p></th>
             <th class="title2">Topic</th>
             <th class="title2">Status</th>
             <th class="title2">Edit</p></th>
            </tr>

            <?php
             $sql1 = "SELECT * FROM course_details WHERE CR_Id='$cr_id' ";
        
                
             $res1 = mysqli_query($conn,$sql1) or  die(mysqli_error());
             
             if($res1==true)
             {
                $count1 = mysqli_num_rows($res1);
                
                $sn =1;
     
                if($count1>0){
                   while($rows=mysqli_fetch_assoc($res1)){
                    $course_id = $rows['Id'];
                     $code2 =$rows['Course_code'];
                     $S_Date =$rows['S_date'];
                     $stime =$rows['SS_time'];
                     $topic = $rows['Topic'];
                     $status = $rows['Status'];
            
           ?>


            <tr>
             <td><?php echo  $code2?></td>
             <td><?php echo  $S_Date?></td>
             <td><?php echo  $stime?></td>
             <td><?php echo  $topic?></td>
             <td><?php echo  $status?></td>
             <td><a href="<?php echo SITEURL;?>Html/course_edit.php?id=<?php echo $course_id?>">View</a></td>
            </tr>

            <?php } } }  ?>
            
         </table>
          

    </div>
</body>
</html>