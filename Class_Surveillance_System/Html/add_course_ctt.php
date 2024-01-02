<?php  include('../Admin/Connection.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style1.css">
    <link rel="stylesheet" href="../Css/style.css">
    <title>Course List Form</title>
</head>
<body>
  <section class="header">
    <div class="hTitle">
        <p>Class Surveillance System</p>
    </div>
    <div class="menubar1">
    </div>
</section>


    <div class="wrapper1">
        <i class="pp"><b>Note: follow your academic syllabus to fill this up...</b></i>
        <br>
        <b class="pp">
          <?php 
          $batch = $_SESSION['batch'];
          $semester = $_SESSION['semester'];
          if(isset($_SESSION['add']))
         {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
         }
         $batch = $_SESSION['batch'];
         $semester = $_SESSION['semester'];
         
        $sql = "SELECT * FROM temp WHERE Batch='$batch' AND Semester='$semester' ";
        
                
        $res = mysqli_query($conn,$sql) or  die(mysqli_error());
        
        if($res==true)
        {
           $count = mysqli_num_rows($res);
           
           $sn =1;

           if($count>0){
              while($rows=mysqli_fetch_assoc($res)){
                $cr_id = $rows['Id'];
              }
           }
          }
         
         
         ?>
        </b>
        <br>
        <div class="courseAdd">
          <form action="./add_course_ctt.php" method="post">
          <input type="text" class="input2" name="code" placeholder="Course Code (ex:- ICT-xxxx)">
          <input type="text" class="input2" name="title" placeholder="Course Title (ex:- Database Management System)">
          <input type="text" class="input2" name="teacher" placeholder="Course Teacher (ex:- FKP)">
          <input type="submit" name="submit" value="Add" class="btn3">
        </form>
        </div>
        
    </div>
</body>
</html>




<?php

  if(isset($_POST['submit'])){
    $code = $_POST['code'];
    $title = $_POST['title'];
    $teacher = $_POST['teacher'];
    

  $sql = "INSERT INTO semester_batch_info SET
      CR_Id = '$cr_id',
      Course_code = '$code',
      Course_Title = '$title',
      Course_Teacher = '$teacher'
      
  ";

  $res = mysqli_query($conn,$sql) or  die(mysqli_error());

  if($res==true){
      $_SESSION['add'] = 'Course Add Successfully. Check it out';
      header("location:".SITEURL.'Html/cr_course_list.php');
  }
  else{
      $_SESSION['add'] = 'Failed to add CR Info';
      header("location:".SITEURL.'Html/cr_course_list.php');
  }
  }


  ?>
