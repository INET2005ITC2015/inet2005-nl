<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Display Actor Information</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

        <!--<style type="text/css">
            table
            {
               border: 1px solid purple;
            }
            th, td
            {
               border: 1px solid red;
            }
        </style>-->
    </head>
    <body>
    <form action="searchActor.php"  method="post" name="searchname">
        <legend><h2>Enter Text to Search:</h2></legend>
        <p><input type='text' name='query' value="<?php echo $query ?>"/></p>
        <p><input type='submit' value='Search Name' /></p>

    </form>

    <h1>Actor:</h1>
        <table class="table table-striped table-bordered table-condensed">
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
