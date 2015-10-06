<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>PreLoad the Information To be Updated in the Actor</title>
</head>
<body>

    <form method="post" action="FinalUpdateActor.php">
        <?php
            require_once('dbConn.php');
            $db = getDBConnection();
            //if (!empty($_POST['idUpdate'])) {
                $sqlStatement = "SELECT * FROM actor WHERE actor_id = ";
                $sqlStatement.= $_POST['idUpdate'];
                $sqlStatement.= ";";
                $result = mysqli_query($db, $sqlStatement);

                while($row = mysqli_fetch_assoc($result)){?>
                        <p><input type="hidden" name="id" value="<?php echo $row['actor_id'];?>" /></p>
                        <p><label>First Name: <input type="text" name="firstName" value="<?php echo $row['first_name'];?>" /></label></p>
                        <p><label>Last  Name: <input type="text" name="lastName" value="<?php echo $row['last_name'];?>" /></label></p>
                <?php
              //}
                }?>
        <p><button type = "submit" id="btnUpdate" name = "update" > Update</button ></p>
    </form>


</body>
</html>