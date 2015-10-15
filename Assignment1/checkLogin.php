<?php

 require_once("database_connection.php");
 $db = getDBConnection();

 $tbl_name="user"; // Table name

$myusername=$_POST['myusername'];
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

$myusername = mysqli_real_escape_string($db, $myusername);
$mypassword = mysqli_real_escape_string($db,$mypassword);
$hashPWD = hash('sha512',$mypassword);

$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$hashPWD'";
$result=mysqli_query($db, $sql);

// Mysql_num_row is counting table row
 $count=mysqli_num_rows($result);

if($count==1){
    session_start();
// Register $myusername, $mypassword and redirect to file "login_success.php"
    $_SESSION['myusername'] = $myusername;
    header("location:index.php");
}
else {
    echo "Wrong Username or Password";
}

