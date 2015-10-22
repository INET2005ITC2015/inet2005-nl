<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Delete From the Actor</title>
</head>
<body>
<?php

    $result = "";
    //require("../Business/Actor.php");
    $actorId = $_POST['idDelete'];
    //$actor = Actor::retrieveSingleActor($actorId);
    if(!empty($_POST['idDelete']) && isset($_POST['delete']))
    {
        require("../Business/Actor.php");

        $deleteActor = new Actor(null,null, $actorId);

        $result = $deleteActor->delete();
    }
    else
    {
        $result = "Nothing to do!";
    }
?>
<h1><?php echo $result; ?></h1>
<a href="displayActors.php">Back to Display</a>
</body>
</html>
