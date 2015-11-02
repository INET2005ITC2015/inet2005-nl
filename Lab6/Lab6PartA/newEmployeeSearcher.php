<?php
    // Let's simulate a slow page load from the Server
    //sleep(2);
            
    $searchValue = "";

    if(!empty($_GET['q']))
    {
        $searchValue = $_GET['q'];

        include("dbConn.php");

        connectToDB();

        selectEmployeesNamesWithNameStartingWith($searchValue);


        while ($row = fetchNames())
        {
                echo $row['full_name'] .  "<br/>";
        }

        closeDB();
    }

           