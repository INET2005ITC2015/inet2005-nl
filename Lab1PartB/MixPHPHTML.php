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

</body>
</html>