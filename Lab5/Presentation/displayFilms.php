<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Display Film Information</title>
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
        <h1>Film:</h1>
        <table class="table table-striped table-bordered table-condensed">
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
