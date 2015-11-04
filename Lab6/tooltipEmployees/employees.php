<!DOCTYPE html>
<html>
    <head>
        <title>Employee Data</title>
        <meta charset="UTF-8" />
        <link href="styles.css" rel="stylesheet" type="text/css" />
        <script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
        <script src="js/jquery.qtip-1.0.0-rc3.min.js" type="text/javascript"></script>
        <script src="myCode.js" type="text/javascript"></script>
    </head>
    <body>
        <header>
        </header>
        <section>
           <table class="tip">
               <thead>
                   <tr>
                       <th colspan="3">Employee Data</th>
                   </tr>
                   <tr>
                       <th>Employee No</th>
                       <th>Employee Name</th>
                       <th>Employee Info</th>
                   </tr>
                </thead>
               <tbody>
            <?php

            require_once('dbConn.php');
            $db = getDBConnection();

            $result = mysqli_query($db,"SELECT emp_no, CONCAT(first_name,' ',last_name) as full_name FROM employees limit 0,50;");
            if(!$result){
                    die('Could not retrieve records from the Employees Database: ' . mysqli_error($db));
            }


            while ($row = mysqli_fetch_assoc($result)):
            ?>
                    <tr>
                        <td><?php echo $row['emp_no'];?></td>
                        <td><?php echo $row['full_name'];?></td>
                        <td class="tip" id="emp<?php echo $row['emp_no'];?>">
                            <img src="images/info.jpg" alt="info icon" />
                        </td>
                    </tr>
            <?php
                endwhile;

                mysqli_close($db);
            ?>
                </tbody>
            </table>

        </section>
        <footer>
        </footer>
    </body>
</html>