<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Update the Employees</title>
</head>
<body>
<?php
function convertDateToYYYYmmdd($dateVariable){
    $dateVariable = str_replace('/','-',$dateVariable);
    $dateVariable = date('Y-m-d' , strtotime($dateVariable));
    return $dateVariable;
}

require_once('database_connection.php');
$db = getDBConnection();
if (!empty($_POST['firstName']) && !empty($_POST['lastName'])&& !empty($_POST['birthDate']) &&  !empty($_POST['hireDate']) && !empty($_POST['gender'])) {
    $firstName = ucfirst($_POST['firstName']);
    $lastName = ucfirst($_POST['lastName']);
    $emp_no = $_POST['id'];
    $birthDate = convertDateToYYYYmmdd($_POST['birthDate']);
    $hireDate = convertDateToYYYYmmdd($_POST['hireDate']);
    $gender = $_POST['gender'];

    $sqlStatement ="UPDATE employees SET first_name = '$firstName',last_name = '$lastName', birth_date = '$birthDate', hire_date = '$hireDate', gender = '$gender' WHERE emp_no = '$emp_no';";

    $updateResult = mysqli_query($db,$sqlStatement);

    if(!$updateResult)
    {
        die('Could not insert record into the Employees Database: ' . mysqli_error($db));
    }
    Else
    {
        echo "<p>Successfully Updated: " . mysqli_affected_rows($db) . " record(s)</p>";
        echo "<p>"."<a href='index.php'>" ."Back to the Main Page</a></p>";
    }
    mysqli_close($db);
}
else {
    echo "<h2>" . "Nothing To Do" . "</h2>";
    echo "<p>"."<a href='index.php'>" ."Back to the Main Page</a></p>";
}
?>

</body>
</html>