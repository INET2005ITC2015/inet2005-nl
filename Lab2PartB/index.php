<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Outputting Fahrenheit to Celcius Conversion in a Dynamically Generated Table</title>
    <style type="text/css">
        table, td, th {
            border:1px solid black;
        }
    </style>
</head>
<body>

    <!--Step 1-->
    <?php
    for($fahrenheit=0;$fahrenheit<=100; $fahrenheit+=1){
        echo  "$fahrenheit degree(s) fahrenheit equals - ";
        $celciusMiddle = 32 - $fahrenheit;
        $celcius = round($celciusMiddle * (5/9));
        echo "$celcius" . " degree Celcius.";
        echo "<br/>";
    }

    ?>
    <!--Step 2-->
    <?php

    ?>
    <table>
        <thead>
            <tr>
                <th>Kilos</th>
                <th>Pounds</th>
            </tr>
        </thead>
        <tbody>
        <?php
            for($i=10;$i<=100; $i+=10){
                echo  "<tr>";
                echo "<td>$i</td>";
                $pounds = $i * 2.2;
                echo "<td>$pounds</td>";
                echo "</tr>";
            }


        ?>
        </tbody>
    </table>
</body>
</html>