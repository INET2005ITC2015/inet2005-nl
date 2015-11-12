<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Actors</title>
        <style type="text/css">
            table
            {
               border: 1px solid purple;
            }
            th, td
            {
               border: 1px solid red;
            }
        </style>
    </head>
    <body>
    <?php $query='';
    if(!empty($_POST['query'])) {
        $query = $_POST['query'];
    }?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="post" name="searchname">
        <legend><h2>Enter Text to Search:</h2></legend>
        <p><input type='text' name='query' value="<?php echo $query ?>"/></p>
        <p><input type='submit' value='Search Name' /></p>

    </form>
        <?php
            if(!empty($lastOperationResults)):
        ?>
        <h2><?php echo $lastOperationResults; ?></h2>
        <?php
            endif;
        ?>

        <h1>Current Actor:</h1>
        <table>
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
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input value="Insert Into the Actor" type="submit" name="InsertBtn"/>
        </form>
    </body>
</html>
