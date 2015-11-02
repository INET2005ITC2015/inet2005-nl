<?php
header("Cache-Control: no-cache");

$results = "";
$searchExpr = "";


if(!empty($_GET['searchExpr']))
{
    $searchExpr = $_GET['searchExpr'];

    include("dbConn.php");

    connectToDB();

    selectEmployeesNamesWithNameStartingWith($searchExpr);


    while ($row = fetchNames())
    {
            $results .= $row['full_name'] . "<br/>";
    }

    closeDB();
}

echo $results;




