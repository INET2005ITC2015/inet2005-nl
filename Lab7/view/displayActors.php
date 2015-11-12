<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include('bootstrap.php');?>
    </head>
    <body>
    <?php
        $query='';
        if(!empty($_POST['query'])) {
            $query = $_POST['query'];
        }
    ?>
    <h2 style="width:500px;margin-left:100px">Enter Text to Search:</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post" name="searchname" style="width:500px;margin-left:100px">
        <div class="form-group">
            <p><input type='text' name='query' class="form-control" value="<?php echo $query ?>"/></p>
        </div>
        <p><input type='submit' class="btn btn-primary" value='Search Name' /></p>

    </form>
        <?php
            if(!empty($lastOperationResults)):
        ?>
        <h2 style="margin-left:100px"><?php echo $lastOperationResults; ?></h2>
        <?php
            endif;
        ?>

        <h1 style="margin-left:100px">Current Actor:</h1>
        <table class="table table-striped table-bordered table-condensed" style="width:500px;margin-left:100px">
            <thead>
                <tr>
                    <th>Actor ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach($arrayOfActors as $actor):
                        
                    ?>
                        <tr>
                            <td><?php echo $actor->getID(); ?></td>
                            <td><?php echo $actor->getFirstName(); ?></td>
                            <td><?php echo $actor->getLastName(); ?></td>
                            <td>
                                <a href="<?php echo $_SERVER['PHP_SELF']; ?>?idUpdate=<?php echo $actor->getID(); ?>">
                                    <img src="../public/images/edit_icon.png" height="25px" width="25px"/>
                                </a>
                            </td>
                            <td>
                                <a href="<?php echo $_SERVER['PHP_SELF']; ?>?idDelete=<?php echo $actor->getID(); ?>">
                                    <img src="../public/images/delete.png" height="25px" width="25px"/>
                                </a>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                ?>
            </tbody>
            <tfoot></tfoot>
        </table>
        <hr>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" style="width:500px;margin-left:100px">
            <input value= "Insert Into the Actor" class="btn btn-primary"  type="submit" name="InsertBtn"/>
        </form>
    </body>
</html>
