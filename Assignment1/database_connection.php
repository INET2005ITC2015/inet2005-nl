
<?php
/**
 * Created by PhpStorm.
 * User: inet2005
 * Date: 9/25/15
 * Time: 7:48 AM
 */
function getDBConnection(){
    $db = mysqli_connect("localhost","root", "inet2005","employees");
    if (!$db)
    {
        die('Could not connect to the Employees Database: ' . mysqli_error($db));
    }

    return $db;
}