<?php
/**
 * Created by PhpStorm.
 * User: Nayeema Lail
 * Date: 11/19/2014
 * Time: 9:08 AM
 */

// connect to the database
$host='localhost'; // Host name
$username='root'; // Mysql username
$password='inet2005'; // Mysql password
$db_name='employees'; // Database name

$connection = mysql_connect($host, $username, $password);
if(!  $connection ){
    die('Could not connect: ' . mysql_error());
}

mysql_select_db($db_name);