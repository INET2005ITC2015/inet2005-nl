<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
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
        <th>Actor ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Last Update</th>
    </tr>
    </thead>
    <tbody>
    <?php
    require_once('dbConn.php');
    $db = getDBConnection();

    $result = mysqli_query($db, "SELECT * FROM actor ORDER BY actor_id DESC LIMIT 10");
    if (!$result) {
        die('Could not retrieve records from the Sakila Database: ' . mysqli_error($db));
    }
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['actor_id'] . "</td> ";
        echo "<td>" . $row['first_name'] . "</td>";
        echo "<td>" . $row['last_name'] . "</td>";
        echo "<td>" . $row['last_update'] . "</td>";
        echo "</tr>";
    }
   mysqli_close($db);

    ?>
    </tbody>
</table>
    <p><a href='CRUDOperation.html'>Insert Into Actor</a></p>
    <form id="form2" name="form2" method="post" action="DeleteActor.php">
        <p><label>ID to Delete:<input type="text" name="idDelete" id="idDelete" /></label>  </p>
        <p> <input type="submit" name="delete" id="delete" value="Delete" />  </p>
    </form>

    <form id="form3" name="form3" method="post" action="UpdateActor.php">
        <p><label>ID to Update:<input type="text" name="idUpdate" id="idUpdate" /></label>  </p>
        <p> <input type="submit" name="update" id="update" value="Update" />  </p>
    </form>



</body>
</html>
