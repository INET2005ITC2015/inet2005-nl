<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>View Records</title>

    <!--<input type='button' value='Click me to Logout' onClick="location.href='logout.php'" />-->
    <script>
    function confirmDelete(link) {
    if (confirm("Are you sure, you want to delete this record?")) {
    doAjax(link.href, "POST"); // doAjax needs to send the "confirm" field
    }
    return false;
    }
    </script>

</head>
<body>

<?php
$query='';
if(isset($_GET['query'])){
    $query = $_GET['query'];
}

    echo "<center><h1>Display Employee Records</h1></center>";
    echo "<form action='index.php' method='GET'>";
    echo "<fieldset>
            <legend><h2>Enter Text to Search:</h2></legend>";
    echo "<input type='text' name='query' value='$query'/>";
    echo "<br/>";
    echo "<input type='submit' value='Search Name' />";
    echo "</fieldset></form>";

//connect to the database
include('database_connection.php');

//check if the starting row variable was passed in the URL or not
if (!isset($_GET['start']) or !is_numeric($_GET['start'])) {
//the value of the starting row to 0
    $start = 0;
//otherwise it takes the value from the URL
}
else {
    $start = (int)$_GET['start'];
}
    // number of results to show in each page
    $per_page = 25;

    $sql_stmt = "SELECT * FROM employees";

    if(isset($query)){
        $sql_stmt =  $sql_stmt . " WHERE first_name LIKE '%$query%' OR last_name LIKE '%$query%'";
    }

    $sql_stmt =  $sql_stmt . " LIMIT $start, 25";

    $result = mysql_query($sql_stmt);

    // display data in table
    echo "<table>";
    echo "<tr> <th>Employee ID</th> <th>Birth Date</th> <th>First Name</th> <th>Last Name</th> <th>Gender</th> <th>Hire Date</th><th>Edit</th> <th>Delete</th></tr>";

    // loop through results of database query, displaying them in the table
    for ($i = 0; $i < $per_page; $i++)
    {
        // echo out the contents of each row into a table
        echo "<tr>";
        echo '<td>' . mysql_result($result, $i, 'emp_no') . '</td>';
        echo '<td>' . mysql_result($result, $i, 'birth_date') . '</td>';
        echo '<td>' . mysql_result($result, $i, 'first_name') . '</td>';
        echo '<td>' . mysql_result($result, $i, 'last_name') . '</td>';
        echo '<td>' . mysql_result($result, $i, 'gender') . '</td>';
        echo '<td>' . mysql_result($result, $i, 'hire_date') . '</td>';
        echo '<td><a href="edit.php?emp_no=' . mysql_result($result, $i, 'emp_no') . '"><img src="edit.png" alt="Edit"></a></td>';
        echo '<td><a href="delete.php?emp_no=' . mysql_result($result, $i, 'emp_no') . '" onClick="return confirmDelete(this);">
    <img src="delete1.jpg" alt="Delete"></a></td>';
        echo "</tr>";
    }
    // close table>
    echo "</table>";
    echo "</div>";
    //NEXT LINK
    echo '<div class="next"><a href="'.$_SERVER['PHP_SELF'].'?start='.($start+25).'"><span>Next</span></a></div>';
    //PREVIOUS LINK
    $end = $start - 25;
    //only print a "Previous" link if a "Next" link was clicked
    if ($end >= 0)
        echo '<div class="previous"><a href="'.$_SERVER['PHP_SELF'].'?start='.$end.'"><span>Previous</span></a></div>';
    ?>
    <p><div class="add"><a href="add1.php">Add a new record</a></div></p>
    <footer div class="footer">Copyright Reserved to Nayeema Lail.&copy;2015</div></footer>
</body>

</html>