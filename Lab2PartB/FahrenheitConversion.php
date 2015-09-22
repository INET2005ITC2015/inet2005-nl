<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Outputting Fahrenheit to Celcius Conversion in a Dynamically Generated Table</title>
    <link rel="stylesheet" href="table.css" type="text/css"/>
</head>
<body>

    <p>
        <a href="FahrenheitConversion.php">Click here for Fahrenheit to Celcius Conversion</a> |
        <a href="CelciusConversion.php">Click here for Celcius to Fahrenheit Conversion</a>
    </p>

    <!--Step 1-->
    <?php
    /*for($fahrenheit=0;$fahrenheit<=100; $fahrenheit+=1){
        echo  "$fahrenheit degree(s) fahrenheit equals - ";
        $celciusMiddle = 32 - $fahrenheit;
        $celcius = round($celciusMiddle * (5/9));
        echo "$celcius" . " degree Celcius.";
        echo "<br/>";
    }*/

    ?>
    <!--Fahrenheit to Celcius Conversion-->
    <?php

    ?>
    <table>
        <thead>
        <tr>
            <th>Fahrenheit</th>
            <th>Celcius</th>
        </tr>
        </thead>
        <tbody>
        <?php
            for($fahrenheit=0;$fahrenheit<=100; $fahrenheit+=1){
                echo  "<tr>";
                echo "<td>$fahrenheit</td>";
                $celciusMiddle = 32 - $fahrenheit;
                $celcius = round($celciusMiddle * (5/9));
                echo "<td>$celcius</td>";
                echo "</tr>";
        }


        ?>
        </tbody>
    </table>
</body>
</html>