<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include('bootstrap.php');?>

        <title>Actor Update</title>
    </head>
    <body>
        <h1 style="width:500px;margin-left:100px">Edit Actor:</h1>
        <form id="formUpdate" name="formUpdate" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="width:500px;margin-left:100px">
            <div class="form-group">
                <label>Actor ID:</label>
                <input type="text" 	class="form-control" readonly="readonly" name="editActorId" id="editActorId" value="<?php echo $currentActor->getID();?>"/>
                </div>
            <div class="form-group">
                <label>First Name:</label>
                <input type="text" class="form-control" name="firstName" id="firstName" value="<?php echo $currentActor->getFirstName();?>"/>
            </div>
            <div class="form-group">
            <label>Last Name:</label>
                    <input type="text" class="form-control" name="lastName" id="lastName" value="<?php echo $currentActor->getLastName();?>"/>
            </div>
             <input type="submit" name="UpdateBtn" id="UpdateBtn" class="btn btn-primary" value="Update" onclick="return confirm('Really Update?')"/>

        </form>
    </body>
</html>
