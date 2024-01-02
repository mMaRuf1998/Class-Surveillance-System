<?php include('./Admin/Connection.php'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./Css/style.css" />
    <link rel="stylesheet" href="./Css/style2.css" />
    <title>Class Surveillance System</title>
  </head>
  <body>
    <section class="header">
      <div class="hTitle">
        <a href="">Home</a>
        <a href="#about">About</a>
        <a href="">Contact</a>
      </div>
      <div class="menubar1">
        <a href="./Html/login_page_CR.php">Log In</a>
        <a href="./Html/cr_register.php">Sign Up</a>
      </div>
    </section>

    <section class="home">
      <div class="textBox">
        <div class="logo">
          <img src="./image/Logo.png" alt="" />
          <h2>Class Surveillance System</h2>
        </div>
        <h1>Welcome</h1>
        <p>To</p>
        <p>Our Website</p>
        <h3>
        <?php  if(isset($_SESSION['msg']))
         {
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
         }
         ?>
        </h3>
      </div>
      
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

    <section class="about" id="about">
    <div class="box-container">
        <h1 class="heading"> <span> About </span>US</h1>
        <p>   Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Maecenas consequat imperdiet arcu et facilisis. Duis hendrerit rutrum massa. 
        Sed quis velit a quam placerat egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus.
         Nullam ornare turpis diam, id lobortis mi gravida eu. Curabitur eu velit faucibus, pellentesque neque ac, tempus lectus. Nulla id mauris libero.
         <br><br>
         Ut sodales semper ante eget rutrum. Nam id magna ornare, commodo orci dictum, viverra dolor.
         Proin ligula urna, ornare ut neque quis, ultricies aliquam tortor. Donec nec ullamcorper velit, non viverra ex.
         Mauris imperdiet justo massa, eget interdum diam tincidunt a. Aliquam erat volutpat. Pellentesque habitant morbi.
         Quisque non elementum purus, vel bibendum orci. In sodales quis orci et cursus. Phasellus sit amet est mauris. 
        </p>
        </div>
    <div class="imgbox">
    </div>

</section>

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
