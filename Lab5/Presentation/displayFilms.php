<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Display Film Information</title>
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
        <h1>Film:</h1>
        <table>
            <thead>
                <tr>
                    <td>Film ID</td>
                    <td>Title</td>
                    <td>Description</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    require("../Business/Film.php");

                    $arrayOfFilms = Film::retrieveSome(0,10);

                    foreach($arrayOfFilms as $film):
                        
                    ?>
                        <tr>
                            <td><?php echo $film->getID(); ?></td>
                            <td><?php echo $film->getTitle(); ?></td>
                            <td><?php echo $film->getDescription(); ?></td>
                        </tr>
                    <?php
                    endforeach;
                ?>
            </tbody>
        </table>
        <a href="displayActors.php"><h4>View & Different SQL operation on Actor Table</h4></a>
    </body>
</html>
