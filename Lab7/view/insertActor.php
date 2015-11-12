<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include('bootstrap.php');?>
        <title>Insert into the Actor</title>
    </head>
    <body>
        <h1 style="width:500px;margin-left:100px">Insert Into Actor:</h1>
        <form id="formInsert" name="formInsert" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="width:500px;margin-left:100px">
            <div class="form-group"><label>First Name:</label> <input type="text" class="form-control" name="firstName" id="firstName" />  </div>
            <div class="form-group"><label>Last Name : </label><input type="text" class="form-control" name="lastName" id="lastName" />  </div>
            <p> <input type="submit" name="insert" class="btn btn-primary" id="submit" value="Submit" onclick="return confirm('Really Insert?')" /></p>
        </form>
    </body>
</html>
