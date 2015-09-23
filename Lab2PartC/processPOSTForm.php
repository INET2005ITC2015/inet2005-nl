<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>PHP Form With Post Variable</title>
  </head>
<body>

<h2>
    <?php
    echo nl2br("The Result of the PHP Form with Post Variable is: \n\n");
    if (isset($_POST['Submit'])) {
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        echo nl2br("Your Name is: " . $fName ." ". $lName . " !\n");

        $feet = 0;
        $inch= 0;
		if (isset($_POST['hFeet']) && $_POST['hInch']!='') {
		        $feet = $_POST['hFeet'];
		        $inch  = $_POST['hInch'];
                $inchResult = $inch / 12;
                $feetResult = $feet + $inchResult;
                $result = $feetResult / 3.25;
                $result = round($result,2);
                echo  " Your height in metres is:  " . $result . " m";
	    }

    }

       // put your code here

    ?>
</h2>
</body>
</html>
