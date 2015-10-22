<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Preload the Information of the Actor</title>
    </head>
    <body>
    <form method="post" action="updateFinal.php">
        <?php
            require("../Business/Actor.php");
            $actorId = $_POST['idUpdate'];
            $actor = Actor::retrieveSingleActor($actorId);
            $currentActorFirstName = $actor->getFirstName();
            $currentActorLastName = $actor->getLastName();

            echo "<p><input type='hidden' name='id' value='$actorId'/></p> ";
            echo "<p><label>First Name: <input type='text' name='firstName' value='$currentActorFirstName'/></label></p> ";
            echo "<p><label>Last Name: <input type='text' name='lastName' value='$currentActorLastName'/></label></p> ";
        ?>
        <p><button type = "submit" id="btnUpdate" name = "update" > Update</button ></p>
    </form>
    <a href="displayActors.php">Back to Display</a>
    </body>
</html>
