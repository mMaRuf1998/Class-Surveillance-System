<?php include('../Admin/Connection.php'); 
include('./Login-chechk_CR.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../Css/style.css" />
    <link rel="stylesheet" href="../Css/style2.css" />
    <title>Class Surveillance System</title>
  </head>
  <body>
    <section class="header">
      <div class="hTitle">
        <a href="">Home</a>
        <a href="">About</a>
        <a href="">Contact</a>
      </div>
      <div class="menubar1">
        
      <a href="./CR_index.php">Home</a>
        <a href="./cr_All_updates.php">Upload</a>
        <a href="./log_out_CR.php">Log Out</a>
      </div>
    </section>

    <section class="home">
      <div class="textBox">
        <div class="logo">
          <img src="/image/Logo.png" alt="" />
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

          <div class="form" action="search.html" method="get">
            <div class="input_field">
              <label>Batch</label>
              <div class="custom_select">
                <select id="batch">
                  <option value="">Select</option>
                  <option value="48">48</option>
                  <option value="49">49</option>
                  <option value="50">50</option>
                  <option value="51">51</option>
                  <option value="52">52</option>
                </select>
              </div>
            </div>

            <div class="input_field">
              <label>Semester</label>
              <div class="custom_select">
                <select id="semester">
                  <option value="">Select</option>
                  <option value="5-1">5th Year,2nd Semester</option>
                  <option value="5-2">5th Year, 1st Semester</option>
                  <option value="5-1">4th Year,2nd Semester</option>
                  <option value="5-2">4th Year, 1st Semester</option>
                  <option value="5-1">3rd Year,2nd Semester</option>
                  <option value="5-2">3rd Year, 1st Semester</option>
                  <option value="5-1">2nd Year,2nd Semester</option>
                  <option value="5-2">2nd Year, 1st Semester</option>
                  <option value="5-1">1st Year,2nd Semester</option>
                  <option value="5-2">1st Year, 1st Semester</option>
                </select>
              </div>
            </div>

            <div class="input_field">
              <input
                type="submit"
                value="Search"
                onclick="location.href='./Html/Search_Results.html'"
                onclick="passvalue();"
                class="btn"
              />
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
