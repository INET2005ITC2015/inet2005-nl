
<?php
session_start();
session_destroy();
header('location:login.php');

?>
<html lang='en'>
<head>
    <meta charset="UTF-8" />
    <title>Logout Page</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<html>
<body>
You are now Logged out
<input type="submit" name="submit" value="Click here Login Again"
       onClick="location.href='login.php'">
</body>
</html>