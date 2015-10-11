<?php
/* 
 DELETE.PHP
 Deletes a specific entry from the table
*/
//connect to the database
include('database_connection.php');

// check if the 'emp_no' variable is set in URL, and check that it is valid
if (isset($_GET['emp_no']) && is_numeric($_GET['emp_no'])){
    // get emp_no value
    $emp_no = $_GET['emp_no'];

    // delete the entry
    $result = mysql_query("DELETE FROM employees WHERE emp_no='$emp_no'") or die(mysql_error());
    //printf("Affected rows (UPDATE): %d\n", $mysqli->affected_rows);

    // redirect back to the view page
    header( "Location: index.php");

}
else// if emp_no isn't set, or isn't valid, redirect back to view page
{
    header("Location: index.php");
}

?>