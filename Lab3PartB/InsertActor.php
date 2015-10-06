<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

        <?php
        require_once('dbConn.php');
        $db = getDBConnection();
            if (!empty($_POST['firstName']) && !empty($_POST['lastName'])) {


                $sqlStatement = "INSERT INTO actor (first_name, last_name) VALUES ('";
                $sqlStatement .= $_POST['firstName'];
                $sqlStatement .= "','";
                $sqlStatement .= $_POST['lastName'];
                $sqlStatement .= "');";

                $insertResult = mysqli_query($db, $sqlStatement);

                if (!$insertResult) {
                    die('Could not insert record into the Sakila Database: ' . mysqli_error($db));
                } Else {
                    echo "New record inserted.";
                    echo "<p>"."<a href='ActorList.php'>" ."Back to the Main Actor List Page</a></p>";
                }

                mysqli_close($db);
            }
        else {
            echo "<h2>" . "Nothing To Do" . "</h2>";
            echo "<p>"."<a href='ActorList.php'>" ."Back to the Main Actor List Page</a></p>";;
        }
        ?>

</body>
</html>
