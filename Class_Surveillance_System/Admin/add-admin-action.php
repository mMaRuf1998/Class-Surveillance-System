<?php
 include('Connection.php'); 

$Name =$_POST['Fname'];
$user =$_POST['Lname'];
$Desig =$_POST['designation'];
$email =$_POST['Email'];
$gender = $_POST['Gender_select'];
$password =$_POST['password'];
$number =$_POST['Phone_Number'];



$sql = "INSERT INTO admin SET
    Name = '$Name',
    Last_name = '$user',
    Designation = '$Desig',
    Number = '$number',
    Email = '$email',
    Gender = '$gender',
    Password = '$password'
    
";

$res = mysqli_query($conn,$sql) or  die(mysqli_error());

if($res==true){
    $_SESSION['add'] = 'Admin Added Successfully';
    header("location:".SITEURL.'Admin/manage_admin.php');
}
else{
    $_SESSION['add'] = 'Failed to add admin';
    header("location:".SITEURL.'Admin/manage_admin.php');
}

?>



<!-- //  $conn = new mysqli('localhost','root','','practice');
// if($conn->connect_error){
//     die('Connection Failed : '.$conn->connect_error);
// }
// else{
//     $stmt = $conn->prepare("insert into admin(Name,UserName,Password,PhoneNumber)
//     values(?,?,?,?)");

//     $stmt->bind_param("ssss",$fullName,$user,$password,$number);
//     $stmt->execute();
//     echo "Admin Added Successfull...";
//     $stmt->close();
//     $conn->close();
// } -->