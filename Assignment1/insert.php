<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <script src="script.js"></script>
    <title></title>
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

    $bDate = convertDateToYYYYmmdd($_POST['birthDate']);
    $hDate = convertDateToYYYYmmdd($_POST['hireDate']);

    $result = mysqli_query($db, "select Max(employees.emp_no) as EmployeeId FROM employees");
    while ($row = mysqli_fetch_row($result)) {
        $employeeId = $row[0] + 1;
    }

    $sqlStatement = "INSERT INTO employees (emp_no, first_name, last_name, birth_date, hire_date,gender) VALUES ('";
    $sqlStatement .= $employeeId;
    $sqlStatement .= "','";
    $sqlStatement .= ucfirst($_POST['firstName']);
    $sqlStatement .= "','";
    $sqlStatement .= ucfirst($_POST['lastName']);
    $sqlStatement .= "','";
    $sqlStatement .= $bDate;
    $sqlStatement .= "','";
    $sqlStatement .= $hDate;
    $sqlStatement .= "','";
    $sqlStatement .= $_POST['gender'];
    $sqlStatement .= "');";

    $insertResult = mysqli_query($db, $sqlStatement);

    if (!$insertResult) {
        die('Could not insert record into the Employees Database: ' . mysqli_error($db));
    } Else {
        echo "New record inserted.";
        echo "<p>"."<a href='index.php'>" ."Back to the Main Page</a></p>";
    }

    mysqli_close($db);
}
else {
    echo "<h2>" . "Nothing To Do" . "</h2>";
    echo "<p>"."<a href='index.php'>" ."Back to the Main Page</a></p>";;
}
?>

</body>
</html>
