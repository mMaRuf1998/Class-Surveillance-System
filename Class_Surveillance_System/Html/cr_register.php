<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Css/style1.css">
    <link rel="stylesheet" href="../Css/style.css">
    <title>Registration Form</title>
</head>
<body>

   <section class="header">
      <div class="hTitle">
          <p>Class Surveillance System</p>
      </div>
      <div class="menubar1">
          <!-- <a href="./login_page.html">Log In</a>
          <a href="./cr_register.html">Sign Up</a> -->
      </div>
  </section>

    <div class="wrapper">
        <div class="title">
          Registration Form
        </div>
        <div class="form">
         <form action="" method="post">
           <div class="inputfield">
              <label>First Name</label>
              <input type="text" name="Name" class="input" required>
           </div>  
            <div class="inputfield">
              <label>Last Name</label>
              <input type="text" name="Lname" class="input">
           </div>  
           <div class="inputfield">
            <label>Email Address</label>
            <input type="text" name="email" class="input">
         </div> 
           <div class="inputfield">
              <label>Password</label>
              <input type="password" name="password" class="input" placeholder="At least 8 character">
           </div>  
          <div class="inputfield">
              <label>Confirm Password</label>
              <input type="password" class="input">
           </div> 
            <div class="inputfield">
              <label>Gender</label>
              <div class="custom_select">
                <select name="gender">
                  <option value="">Select</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>
           </div> 
            
          <div class="inputfield">
              <label>Phone Number</label>
              <input type="text" name="number" class="input">
           </div> 
           <div class="inputfield">
            <label>Class Roll</label>
            <input type="text" name="roll" class="input">
         </div> 
          
           <div class="inputfield">
            <label>Which Semester?</label>
            <div class="custom_select">
              <select name="semester">
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
         <div class="inputfield">
            <label>Which Batch?</label>
            <input type="text" name="batch" class="input" placeholder="university batch">
         </div> 
          <div class="inputfield">
           <input type="submit" name="submit" value="Go Next &#x2192" class="btn">
           <br>
           <!-- <button onclick="window.location.href='cr_course_list.html';" class="next">Go Next &#x2192</button>
           --></div>
          	
   </form>
        </div>
    </div>
</body>
</html>


<?php
 include('../Admin/Connection.php'); 
if(isset($_POST['submit'])) {
$Name =$_POST['Name'];
$Lname =$_POST['Lname'];
$email =$_POST['email'];
$gender = $_POST['gender'];
$password =$_POST['password'];
$number =$_POST['number'];
$roll =$_POST['roll'];
$semester =$_POST['semester'];
$batch =$_POST['batch'];



$sql = "INSERT INTO temp SET
    Name = '$Name',
    Last_name = '$Lname',
    Email = '$email',
    Number = '$number',
    Roll = '$roll',
    Gender = '$gender',
    Password = '$password',
    Semester = '$semester',
    Batch = '$batch'
    
";

$res = mysqli_query($conn,$sql) or  die(mysqli_error());

if($res==true){
  $_SESSION['batch'] = $batch;
  $_SESSION['semester'] = $semester;
    $_SESSION['add'] = 'Your Info Submitted Successfully';
    header("location:".SITEURL.'Html/cr_course_list.php');
}
else{
    $_SESSION['add'] = 'Failed to add CR Info';
    header("location:".SITEURL.'Html/cr_course_list.php');
}
}
?>
