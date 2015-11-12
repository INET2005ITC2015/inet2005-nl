<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include('bootstrap.php');?>
        <title>Delete Actor</title>
    </head>
    <body>
        <h1 style="width:500px;margin-left:100px">Delete Actor:</h1>
        <form id="formDelete" name="formDelete" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  style="width:500px;margin-left:100px">
            <div class="form-group"><label>Actor ID:</label><input type="text" class="form-control" readonly="readonly" name="deleteActorId" id="deleteActorId" value="<?php echo $currentActor->getID();?>"/>

            </div>

                <input type="submit" name="DeleteBtn" id="DeleteBtn" class="btn btn-primary" value="Delete" onclick="return confirm('Really Delete?')"/>
            </p>
        </form>
    </body>
</html>
