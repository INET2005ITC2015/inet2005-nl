<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Delete Actor</title>
    </head>
    <body>
        <h1>Delete Actor:</h1>
        <form id="formDelete" name="formDelete" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p><label>Actor ID:<input type="text" readonly="readonly" name="deleteActorId" id="deleteActorId" value="<?php echo $currentActor->getID();?>"/>
                </label>  
            </p>

                <input type="submit" name="DeleteBtn" id="DeleteBtn" value="Delete" onclick="return confirm('Really Delete?')"/>
            </p>
        </form>
    </body>
</html>
