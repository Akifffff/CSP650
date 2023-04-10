<?php
//Start session
 
include('dbconnect.php');
 $fuser=$_POST['fid'];  //userid
 $fname = $_POST['fname'];
$fpwd = $_POST['fpwd'];
$fpwd = $_POST['fic'];
$fphone = $_POST['fphone'];
$femail = $_POST['femail'];


$sql1 = "INSERT INTO user (ID, Name, Password, IC, PhoneNum, Email,Role) 
VALUES ('$fid','$fname','$fpwd','$fic','$fphone','$femail', '2')"; //client
$result1 = mysqli_query($conn, $sql1);

if($result1)
{
    echo "<script> alert('Registration successful! ');window.location.href = 'loginpage.php'</script>";
    //header("Location: homepage.php?success=true");
}
else
{
    
    echo "<script> alert('Failed to register! ');window.location.href = 'register.php'</script>";

}

mysqli_close($conn);

?>