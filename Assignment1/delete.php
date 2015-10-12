<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Delete to the Actor</title>
</head>
<body>
<?php
    /*
     DELETE.PHP
     Deletes a specific entry from the table
    */
    //connect to the database
    require_once('database_connection.php');
    $db = getDBConnection();

    // check if the 'emp_no' variable is set in URL, and check that it is valid
    if (isset($_GET['emp_no']) && is_numeric($_GET['emp_no'])){
        $emp_no = $_GET['emp_no'];

        // delete the entry
        $result = mysqli_query($db, "DELETE FROM employees WHERE emp_no='$emp_no'");
        if(!$result)
        {
            die('Could not delete record into the Employees Database: ' . mysqli_error($db));
            echo "<p>"."<a href='index.php'>" ."Back to the Main Page</a></p>";
        }
        Else
        {
            echo "<p>Successfully deleted: " . mysqli_affected_rows($db) . " record(s)</p>";
            echo "<p>"."<a href='index.php'>" ."Back to the Main Page</a></p>";
        }
        mysqli_close($db);
    }
    else {
        echo "<p>"."<a href='index.php'>" ."Back to the Main Page</a></p>";
    }
?>
</form>
</body>
</html>