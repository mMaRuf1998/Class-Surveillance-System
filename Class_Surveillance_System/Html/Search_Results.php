<?php include('../Admin/Connection.php'); 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Class Surveillance System</title>
    <link rel="stylesheet" href="../Css/style2.css" />
    <link rel="stylesheet" href="../Css/style1.css"> 
    <link rel="stylesheet" href="../Css/style.css" />

    <link rel="stylesheet" href="../Css/bootstrap.min.css" />
  </head>
  <body>
    <section class="header">
      <div class="hTitle">
        <p>Class Surveillance System</p>
      </div>
      <div class="menubar1">
        <a href="./login_page.php">Log In</a>
        <a href="./cr_register.php">Sign Up</a>
      </div>
    </section>
    <section class="mainCR">
      <h1>Search Result</h1>
  

      <div class="Sbox">
        <div class="wrapper" style="max-width: 500px; margin: 200px auto">
          <div class="title">Class Surveillance System</div>

          <form action="" method="post">
            <div class="input_field">
              <label>Batch</label>
              <div class="custom_select">
                <input type="text" name="batch" placeholder="Enter Batch">
              </div>
            </div>

            <div class="input_field">
              <label>Semester</label>
              <div class="custom_select">
                <select id="semester" name="semester">
                  <option value="">Select</option>
                  <option value="5th Year,2nd Semester">5th Year,2nd Semester</option>
                  <option value="5th Year,1st Semester">5th Year, 1st Semester</option>
                  <option value="4th Year,2nd Semester">4th Year,2nd Semester</option>
                  <option value="4th Year,1st Semester">4th Year, 1st Semester</option>
                  <option value="3rd Year,2nd Semester">3rd Year,2nd Semester</option>
                  <option value="3rd Year,1st Semester">3rd Year, 1st Semester</option>
                  <option value="2nd Year,2nd Semester">2nd Year,2nd Semester</option>
                  <option value="2nd Year,1st Semester">2nd Year, 1st Semester</option>
                  <option value="1st Year,2nd Semester">1st Year,2nd Semester</option>
                  <option value="1st Year,1st Semester">1st Year, 1st Semester</option>
                </select>
              </div>
            </div>

            <div class="input_field">
              <input type="submit" name="submit" value="Search" class="btn" >
        </div>
        </form>
        </div>
      </div>

            </section>
            <br><br><br><br><br><br><br><br><br><br>
    <div class="wrapper3">
          <br>
          <hr>
          <br>
          <br>
          <div class="concatenate">
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
             <th class="title2">Details</p></th>
            </tr>

            <?php

            $batch = $_SESSION['batch'];
            $semester = $_SESSION['semester'];

            if($batch && $semester){
             $sql1 = "SELECT * FROM cr_info INNER JOIN course_details on cr_info.Id = course_details.CR_Id WHERE cr_info.Batch='$batch' AND cr_info.Semester='$semester' ";
            }
            else if($semester){
              $sql1 = "SELECT * FROM cr_info INNER JOIN course_details on cr_info.Id = course_details.CR_Id WHERE cr_info.Semester='$semester' ";
            }
            else{
              $sql1 = "SELECT * FROM cr_info INNER JOIN course_details on cr_info.Id = course_details.CR_Id WHERE cr_info.Batch='$batch' ";
           
            }
                
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
             <td><a href="<?php echo SITEURL;?>Html/course_view.php?id=<?php echo $course_id?>">View</a></td>
            </tr>

            <?php } } }  ?>
            
         </table>
          

    </div>
    </body>
</html>


<?php
  if(isset($_POST['submit'])){
    $batch = $_POST['batch'];
    $semester = $_POST['semester'];
    
    $_SESSION['batch'] = $batch;
    $_SESSION['semester'] = $semester;
    
    header('location:'.SITEURL.'Html/Search_Results.php');
     
}

?>
