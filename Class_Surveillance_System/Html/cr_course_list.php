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
        <b class="pp1">
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
          <a href="./add_course_ctt.php" class="btn3">Add Course</a>
        </div>
        <div class="title">
            List the Course Information Below: 
          </div>
        
          
        
        <table class="tt" class="center">
           <tr>
            <th class="title2">Course Code <p>(ex:- ICT-xxxx)</p></th>
            <th class="title2">Course Title <p>(ex:- Database Management System)</p></th>
            <th class="title2">Course Teacher <p>(ex:- FKP)</p></th>
           </tr>
                                            

           <?php
             $sql1 = "SELECT * FROM semester_batch_info WHERE CR_Id='$cr_id' ";
        
                
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
           <!-- <tr>
            <td><input type="text" class="input2"></td>
            <td><input type="text" class="input2"></td>
            <td><input type="text" class="input2"></td>
           </tr>
           <tr>
            <td><input type="text" class="input2"></td>
            <td><input type="text" class="input2"></td>
            <td><input type="text" class="input2"></td>
           </tr>
           <tr>
            <td><input type="text" class="input2"></td>
            <td><input type="text" class="input2"></td>
            <td><input type="text" class="input2"></td>
           </tr>
           <tr>
            <td><input type="text" class="input2"></td>
            <td><input type="text" class="input2"></td>
            <td><input type="text" class="input2"></td>
           </tr>
           <tr>
            <td><input type="text" class="input2"></td>
            <td><input type="text" class="input2"></td>
            <td><input type="text" class="input2"></td>
           </tr>
           <tr>
            <td><input type="text" class="input2"></td>
            <td><input type="text" class="input2"></td>
            <td><input type="text" class="input2"></td>
           </tr>
           <tr>
            <td><input type="text" class="input2"></td>
            <td><input type="text" class="input2"></td>
            <td><input type="text" class="input2"></td>
           </tr>
           <tr>
            <td><input type="text" class="input2"></td>
            <td><input type="text" class="input2"></td>
            <td><input type="text" class="input2"></td>
           </tr>
           <tr>
            <td><input type="text" class="input2"></td>
            <td><input type="text" class="input2"></td>
            <td><input type="text" class="input2"></td>
           </tr>
            -->
           
        </table>
        <br>
        <i class="pp">***Please check all the information again that you have entered already...</i>
        <br>
        <br>
        <div class="inputfield terms">
            <label class="check">
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
            All the given informations are correct.
         </div> 
        <div class="inputfield1">
           <a href="../index.php" class="btn3">Register</a>
      </div>
    </div>
</body>
</html>



<?php


    $_SESSION['msg'] = 'Registion Successful. Waiting for approval....';


?>
