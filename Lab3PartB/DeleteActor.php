<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Delete to the Actor</title>
</head>
<body>
    <?php

        require_once('dbConn.php');
        $db = getDBConnection();

        //if (!empty($_POST['idDelete'])) {
            $sqlStatement = "DELETE FROM actor WHERE actor_id = ";
            $sqlStatement.= $_POST['idDelete'];
            $sqlStatement.= ";";

            $deleteResult = mysqli_query($db,$sqlStatement);

            if(!$deleteResult)
            {
                die('Could not delete record into the Sakila Database: ' . mysqli_error($db));
                echo "<p>"."<a href='CRUDOperation.html'>" ."Back to the Main Actor List Page</a></p>";
            }
            Else
            {
                echo "<p>Successfully deleted: " . mysqli_affected_rows($db) . " record(s)</p>";
                echo "<p>"."<a href='ActorList.php'>" ."Back to the Main Actor List Page</a></p>";
            }
            mysqli_close($db);
        //}
        //else {
          //  echo "<h2>" . "Nothing To Do" . "</h2>";
            //echo "<p>"."<a href='CRUDOperation.html'>" ."Back to the Main Actor List Page</a></p>";
        //}
    ?>
</form>
</body>
</html>

