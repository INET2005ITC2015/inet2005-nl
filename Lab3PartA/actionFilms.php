<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>PHP Table With Search Option</title>
    <style type="text/css">
    table, td, th {
    border: 1px solid red;
    }
    </style>


</head>
<body>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
    <tbody>
    <?php

        require_once('dbConn.php');
        $db = getDBConnection();

        $query='';
        if(isset($_POST['query'])){
            $query = $_POST['query'];
        }

        //$result = mysqli_query($db,"SELECT * FROM film LIMIT 0,10");
        $sql_stmt = "SELECT * FROM film ";

        if(isset($query)){
            $sql_stmt =  $sql_stmt . " WHERE description like '%$query%' ";
        }

        $sql_stmt =  $sql_stmt . " LIMIT 0, 20";

        $result = mysqli_query($db, $sql_stmt);

        if(!$result)
        {
            die('Could not retrieve records from the Sakila Database: ' . mysqli_error($db));
        }
        while ($row = mysqli_fetch_assoc($result))
        {
            echo "<tr>";
            echo "<td>" . $row['title'] . "</td> " ;
            echo "<td>" . $row['description'] . "</td>";
            echo "</tr>";
        }

        mysqli_close($db);

    ?>
    </tbody>
    </table>

    <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post" name="searchname">
            <legend><h2>Enter Text to Search:</h2></legend>
            <p><input type='text' name='query' value="<?php echo $query ?>"/></p>
            <p><input type='submit' value='Search Name' /></p>

    </form>

</body>
</html>
