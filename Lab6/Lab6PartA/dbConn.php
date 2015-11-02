<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

 $dbConnection;
 $result;

 function connectToDB()
 {
      global $dbConnection;
      $dbConnection = mysqli_connect("localhost","root", "inet2005","employees");
      if (!$dbConnection)
      {
            die('Could not connect to the Employees Database: ' .
                    mysqli_error($dbConnection));
      }
 }

 function closeDB()
 {
      global $dbConnection;
      mysqli_close($dbConnection);
 }

 function selectEmployeesNamesWithNameStartingWith($searchString)
 {
         global $dbConnection;
         global $result;
        $sqlStatement = "SELECT CONCAT(first_name,' ',last_name) AS full_name FROM employees USE INDEX (first_name_index, last_name_index) WHERE first_name LIKE '";
        $sqlStatement .= $searchString;
        $sqlStatement .= "%' OR last_name LIKE '";
        $sqlStatement .= $searchString;
        $sqlStatement .= "%' ;";

        $result = mysqli_query($dbConnection,$sqlStatement);
        if(!$result)
        {
                die('Could not retrieve the Employees Database: ' .
                        mysqli_error($dbConnection));
        }

 }

 function fetchNames()
 {
        global $dbConnection;
        global $result;
        if(!$result)
        {
                die('No records in the result set: ' .
                        mysqli_error($dbConnection));
        }
        return mysqli_fetch_assoc($result);
 }

