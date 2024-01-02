<?php include('../Admin/Connection.php'); 
include('./Login-chechk_CR.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Class Surveillance System</title>
    <link rel="stylesheet" href="../Css/style.css" />
    <link rel="stylesheet" href="../Css/style2.css">
    <link rel="stylesheet" href="../Css/bootstrap.min.css">
 
</head>
<body>
        
  <section class="header">
    <div class="hTitle">
        <p>Class Surveillance System</p>
    </div>
    <div class="menubar1">
      <a href="./CR_index.php">Home</a>
        <a href="./Class_Details.php">Upload</a>
        <a href="./log_out_CR.php">Log Out</a>>
    </div>
</section>
<section class="mainCR">
    <h1>Course Details</h1>
</section>
    
    
    <div class="wrapper" style="width:800px;max-width: 800px;margin: 100px auto ;">
        <div class="title">
          <h1>Course Name</h1>
          <h2>Course Teacher</h2>
          <span>Total Class</span>
        </div> 
        
        <div class="Search_info">
            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Class Date</th>
      <th scope="col">Class Time</th>
      <th scope="col">Status</th>
      <th scope="col">Topics</th>
      <th scope="col">Special Note</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>24.01.2023</td>
      <td>10:00 AM</td>
      <td>Regular</td>
      <td>Agile Methods</td>
      <td>N/A</td>
    </tr>
    <tr>
      <th scope="row">2</th>
       <td>24.01.2023</td>
      <td>12:00 PM</td>
      <td>Makeup</td>
      <td>Testing Methods</td>
      <td>N/A</td>
    </tr>
    <tr>
      <th scope="row">3</th>
       <td>24.01.2023</td>
      <td>10:00 AM</td>
      <td>Regular</td>
      <td>Extreme Programming and Development</td>
      <td>N/A</td>
    </tr>
    
  </tbody>
</table>
        </div>
        
        
    
    </div>
    
    
</body>

</html>