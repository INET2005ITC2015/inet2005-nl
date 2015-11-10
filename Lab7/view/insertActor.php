<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Insert into the Actor</title>
    </head>
    <body>
        <h1>Edit Actor:</h1>
        <form id="formInsert" name="formInsert" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>    
		<label>Actor ID:
                    <input type="text" 	readonly="readonly" name="insertActorId" id="insertActorId" value="<?php echo $currentActor->getID();?>"/>
                </label>  
            </p>
            <p>    
		<label>First Name: 
                    <input type="text" name="firstName" id="firstName">
                </label>  
            </p>  
            <p>    
		<label>Last Name:
                    <input type="text" name="lastName" id="lastName" />
                </label>  
            </p>  
            <p> 
                <input type="submit" name="InsertBtn" id="InsertBtn" value="Insert" onclick="return confirm('Really Update?')"/>
            </p>
        </form>
    </body>
</html>
