<?php
//Start session
session_start();


include("dbconnect.php");

$fuser = $_POST['fuser'];
$fpwd = $_POST['fpwd'];

$sql1 = "SELECT * FROM staff WHERE Staff_ID = '$fuser'"; //username exist ke tak
$result1 = mysqli_query($conn, $sql1); // run statement $sql1
$row1 = mysqli_fetch_array($result1);
$count1 = mysqli_num_rows($result1);

if($count1 > 0) //username wujud
{
    if($fpwd == $row1['Staff_Password']) //kalau password betul
    {
        $_SESSION['fuser'] = session_id();
        $_SESSION['fuser'] = $fuser;
        header('Location: homepage.php'); //page lepas login

    }
    else
    {
        header("Location: loginpage.php?invalid=true");
    }
}
else //username tak wujud
{
    header("Location: loginpage.php?takde=true");
}