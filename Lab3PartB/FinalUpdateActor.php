<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Update the Actor</title>
</head>
<body>
    <?php

    require_once('dbConn.php');
    $db = getDBConnection();

    if (isset($_POST['update'])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $actorID = $_POST['id'];

        $sqlStatement ="UPDATE actor SET first_name = '$firstName',last_name = '$lastName' WHERE actor_id = '$actorID';";

        $updateResult = mysqli_query($db,$sqlStatement);

        if(!$updateResult)
        {
            die('Could not insert record into the Sakila Database: ' . mysqli_error($db));
        }
        Else
        {
            echo "<p>Successfully Updated: " . mysqli_affected_rows($db) . " record(s)</p>";
            echo "<p>"."<a href='ActorList.php'>" ."Back to the Main Actor List Page</a></p>";
        }
        mysqli_close($db);
    }
    else {
        echo "<h2>" . "Nothing To Do" . "</h2>";
        echo "<p>"."<a href='ActorList.php'>" ."Back to the Main Actor List Page</a></p>";
    }
    ?>

</body>
</html>