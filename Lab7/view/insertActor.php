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
        <h1>Insert Into Actor:</h1>
        <form id="formInsert" name="formInsert" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p><label>First Name: <input type="text" name="firstName" id="firstName" /> </label> </p>
            <p><label>Last Name : <input type="text" name="lastName" id="lastName" /></label>  </p>
            <p> <input type="submit" name="insert" id="submit" value="Submit" onclick="return confirm('Really Insert?')" /></p>
        </form>
    </body>
</html>
