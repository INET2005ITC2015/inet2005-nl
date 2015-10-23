<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Display Actor Information</title>
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
    <form action="searchActor.php"  method="post" name="searchname">
        <legend><h2>Enter Text to Search:</h2></legend>
        <p><input type='text' name='query' value="<?php echo $query ?>"/></p>
        <p><input type='submit' value='Search Name' /></p>

    </form>

    <h1>Actor:</h1>
        <table>
            <thead>
                <tr>
                    <th>Actor ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    require("../Business/Actor.php");

                    $arrayOfActors = Actor::retrieveSome(0,10);

                    foreach($arrayOfActors as $actor):
                        
                    ?>
                        <tr>
                            <td><?php echo $actor->getID(); ?></td>
                            <td><?php echo $actor->getFirstName(); ?></td>
                            <td><?php echo $actor->getLastName(); ?></td>

                        </tr>
                    <?php
                    endforeach;
                ?>
            </tbody>
        </table>
        <p><a href='displayFilms.php'>Display Film Information</a></p>
        <p><a href='displayActors.php'>Display Actor Information</a></p>
        <p><a href='newActorForm.html'>Insert Into Actor</a></p>
        <p><a href='updateActorForm.html'>Update Into Actor</a></p>
        <p><a href='deleteActorForm.html'>Delete from Actor</a></p>



    </body>
</html>
