<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Mixing PHP with HTML</title>
</head>
<body>

            <?php
                echo '<h1>Greetings from Lab1 PartB </h1>';
                ?>

        <h4><p>Either create a new PHP site in PhpStorm and call it Lab1 – Part B (if you want separate projects for each part of the lab)
                or continue in the same project. Make sure the project is added to your Github repository.For help with the necessary PHP syntax,
                either refer to the PowerPoint lectures the main php.net site, the W3Schools PHP Tutorial, the New Boston PHP Videos,
                or the alternate resource of your choice.</p></h4>

            <?php
            echo '<h3>Copyright &copy; reserved. 2015</h3>';
            ?>

            <!-- Using a String Variable
                Declare a new variable to hold the string of your name.
                You will then add an echo statement to output that variable.
                Preview it and make sure it works.
            -->
            <?php
                $name = 'Nayeema Mustaril Lail';
                echo $name;
            ?>

            <!--Using the Concatenation Operator
            Now, add a new example working with the concatenation operator.
            Add a few smaller strings together using the concatenation operator and save it to a variable.
            Echo the variable.
            -->
            <br/><br/><br/>
            <?php
                $firstString = 'Lab1';
                $secondString = 'PartB';
                $thirdString = 'Use the Concatenation Operator';
                echo $firstString . ' ' . $secondString. ' ' . $thirdString . '.';
            ?>

            <br/><br/><br/>
            <!--
            Using variables and the arithmetic operators, write PHP code to calculate and echo the following:
            a.	(32 * 14) + 83   -->
            <?php
                $firstVar = 32;
                $secondVar = 14;
                $thirdVar = 83;
                $mult = $firstVar * $secondVar;
                $result = $mult + $thirdVar;
                echo $result;
            ?>
            <br/>
            <!--b.	(1024 / 128) - 7-->
            <?php
                $firstVar = 1024;
                $secondVar = 128;
                $thirdVar = 7;
                $division = $firstVar / $secondVar;
                $result = $division - $thirdVar;
                echo $result;
            ?>
            <br/>
            <!--c.	the remainder of 769 divided by 6-->
            <?php
                $firstVar = 769;
                $secondVar = 6;
                $result = $firstVar % $secondVar;
                echo $result;
            ?>

            <!--Use a loop
            Use a loop to output the following:
            10…9…8…7…6…5…4…3…2…1…Blast Off
            -->
            <br/><br/><br/>
            <?php
                for($number = 10; $number > 0; $number--) {
                    echo $number . "...";
                }
                echo 'Blast Off';
            ?>

            <!--Use an Array
            1.	Create an array to hold 7 colour names of your choosing.
            2.	Output the values of the array using:
                a.	A for loop
            -->
            <br/><br/><br/>
            <?php
                $colors = array("red", "green", "blue", "yellow", "white", "purple" ,"black");
                echo '--------Printing the array of colors using for loop------';
                echo '<br/>';
                for ($i = 0; $i < count($colors); ++$i) {
                    echo $colors[$i] . '<br/>';
                }
            ?>

            <!--b.	A foreach loop-->
            <br/><br/><br/>
            <?php
                $colors = array("red", "green", "blue", "yellow", "white", "purple" ,"black");
                echo '-------Printing the array of colors using foreach loop-------';
                echo '<br/>';
                foreach ($colors as $value) {
                    echo $value . "<br/>";
                }
            ?>
            <!--c.	One other way.-->
            <br/><br/><br/>
            <?php
                $colors = array("red", "green", "blue", "yellow", "white", "purple" ,"black");
                echo '-------Printing the array of colors using another way - using the while loop------';
                echo '<br/>';
                $i = 0;
                while ( $i <= 6 ) {
                    echo $colors[$i] . "<br/>";
                    $i++;
                }
            ?>

</body>
</html>