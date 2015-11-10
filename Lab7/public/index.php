<?php

require_once '../controller/ActorController.php';

$actorController = new ActorController();

if(isset($_GET['idUpdate']))
{
    $actorController->updateAction($_GET['idUpdate']);
}
elseif (isset($_POST['UpdateBtn']))
{
    $actorController->commitUpdateAction($_POST['editActorId'],strtoupper($_POST['firstName']),strtoupper($_POST['lastName']));
}
elseif(isset($_GET['idDelete']))
{
$actorController->deleteAction($_GET['idDelete']);
}
elseif (isset($_POST['DeleteBtn']))
{
    $actorController->commitDeleteAction($_POST['deleteActorId']);
}
elseif (isset($_POST['InsertBtn']))
{
    $actorController->insertAction();

}
else
{
    $actorController->displayAction();
}

