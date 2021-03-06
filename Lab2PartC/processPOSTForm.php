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
        if((!empty($_FILES["userImage"])) && ($_FILES['userImage']['error'] == 0)) {
            //Check if the file is JPEG image and it's size is less than 350Kb
            //assignment
            $fileTmpName = $_FILES['userImage']['tmp_name'];
            $fileOrigName = $_FILES['userImage']['name'];
            $fileSize = $_FILES['userImage']['size'];
            $fileUploadError = $_FILES['userImage']['error']; // 0 means success

            //the path to save this file
            $newPathName = dirname(__FILE__).'/upload/'.$fileOrigName;

            if (!file_exists($newPathName)) {//Check if the file already exists with same name
                if ((move_uploaded_file($_FILES['userImage']['tmp_name'],$newPathName))) {//moving the uploaded file to it's new place
                    echo "<p>Tmp: ".$fileTmpName. "</p>";
                    echo "<p>Orig: ".$fileOrigName. "</p>";
                    echo "<p>Size: ".$fileSize. "</p>";
                    echo "<p>Error: ".$fileUploadError. "</p>";
                    echo "<p>The file has been saved as: ".$newPathName . "!!</p>";
                }
                else {
                    echo "<p>Error: Problem occurred during file upload!</p>";
                }
            }
            else {
                echo "<p>Error: File " .$fileOrigName. " already exists</p>";
            }

        }
        else {
            echo "<p>Error: No file uploaded</p>";
        }
    }



    ?>
</h2>
</body>
</html>
