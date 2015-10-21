<!DOCTYPE html>
<html>
<head>
    <meta charset=UTF-8">
    <title>Shape Area Calculator</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post" name="calculateShape">
    <fieldset>
        <legend>Circle:</legend>
        <p><label>Radius: <input type="number" name="radius"  value="<?php echo $_POST['radius']; ?>"></label></p>
    </fieldset>

    <fieldset>
        <legend>Rectangle:</legend>
        <p><label>Length: <input type="number" name="length" value="<?php echo $_POST['length']; ?>"></label></p>
        <p><label>Width: <input type="number" name = "width" value="<?php echo $_POST['width']; ?>"></label></p>
    </fieldset>

    <fieldset>
        <legend>Triangle:</legend>
        <p><label>Base: <input type="number" name="base" value="<?php echo $_POST['base']; ?>"></label></p>
        <p><label>Height: <input type="number" name="height" value="<?php echo $_POST['height']; ?>"></label></p>
    </fieldset>
    <br>
    <input type='submit' value='Calculate' name="btnCalculate"/>
</form>
</body>
</html>

<?php
    require_once("Circle.php");
    require_once("Triangle.php");
    require_once("Rectangle.php");


    if (!empty($_POST['radius']) && !empty($_POST['length']) && !empty($_POST['width']) && !empty($_POST['base']) && !empty($_POST['height']))
    {
        $radius = $_POST['radius'];
        $circle = new Circle("Circle",$radius);
        echo "<h4>Shape: " . $circle->getName() . "</h4>";
        echo "<h4>Area " . $circle->calculateArea() . "</h4>";

        $length = $_POST['length'];
        $width = $_POST['width'];
        $rectangle = new Rectangle("Rectangle",$length,$width);
        echo "<h4>Shape: " . $rectangle->getName() . "</h4>";
        echo "<h4>Area " . $rectangle->calculateArea() . "</h4>";

        $base = $_POST['base'];
        $height = $_POST['height'];
        $triangle = new Triangle("Triangle",$base, $height);
        echo "<h4>Shape: " . $triangle->getName() . "</h4>";
        echo "<h4>Area " . $triangle->calculateArea() . "</h4>";

    }

    else{
        echo "<h4>Nothing to do</h4>";
    }

