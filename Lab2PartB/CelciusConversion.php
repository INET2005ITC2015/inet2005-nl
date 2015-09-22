<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Outputting Celcius to Fahrenheit Conversion in a Dynamically Generated Table</title>
    <link rel="stylesheet" href="table.css" type="text/css"/>


</head>
<body>
    <p>
        <a href="FahrenheitConversion.php">Click here for Fahrenheit to Celcius Conversion</a> |
        <a href="CelciusConversion.php">Click here for Celcius to Fahrenheit Conversion</a>
    </p>

    <!--Celcius to Fahrenheit Conversion-->

    <table>
        <thead>
        <tr>
            <th>Celcius</th>
            <th>Fahrenheit</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for($celcius=0;$celcius<=100; $celcius+=1){
            echo  "<tr>";
            echo "<td>$celcius</td>";
            $fahrenheitMiddle = $celcius * (9/5);
            $fahrenheit = round($fahrenheitMiddle + 32);
            echo "<td>$fahrenheit</td>";
            echo "</tr>";
        }


        ?>
        </tbody>
    </table>
</body>
</html>