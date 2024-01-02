<?php
        include('Connection.php'); 
      include('Login-chechk.php');

$id =$_GET['id'];
$sql = "SELECT * FROM `temp` WHERE Id='$id'";
$res = mysqli_query($conn,$sql);
if($res==true)
{
   $count = mysqli_num_rows($res);
   
   $sn =1;

   if($count>0){
      while($rows=mysqli_fetch_assoc($res)){
        $Name =$rows['Name'];
        $Lname =$rows['Last_name'];
        $email =$rows['Email'];
        $gender = $rows['Gender'];
        $number =$rows['Number'];
        $roll =$rows['Roll'];
        $semester =$rows['Semester'];
        $password =$rows['Password'];
        $batch =$rows['Batch'];
        
}}}


$sql = "INSERT INTO cr_info SET
    Id = '$id',
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
    $_SESSION['approve'] = 'CR Approve Successfully';
    $sql = "DELETE FROM temp WHERE Id=$id";

    $res = mysqli_query($conn,$sql) or  die(mysqli_error());

    header("location:".SITEURL.'Admin/pending_CR.php');
}
else{
    $_SESSION['add'] = 'Failed to Approve CR';
    header("location:".SITEURL.'Admin/pending_CR.php');
}

?>
