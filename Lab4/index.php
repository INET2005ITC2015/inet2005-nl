<!DOCTYPE html>
<html>
<head>
    <meta charset=UTF-8">
    <title>Shape Area Calculator</title>
</head>
<body>
<form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post" name="calculateShape" id="myForm">
    <fieldset>
        <legend>Circle:</legend>
        <p><label>Radius: <input type="number" name="radius"  id='radius' value="<?php echo $_POST['radius']; ?>"></label></p>
        <p><label>Resize: <input type="number" name="resize"  value="<?php echo $_POST['resize']; ?>"></label></p>
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
        <p><label>Resize: <input type="number" name="resizeHeight"  value="<?php echo $_POST['resizeHeight']; ?>"></label></p>
    </fieldset>
    <br>
    <input type='submit' value='Calculate' name="btnCalculate"/>
    <input type='submit' value='Resize' name="btnResize"/>

</form>
</body>
</html>

<?php
    require_once("Circle.php");
    require_once("Triangle.php");
    require_once("Rectangle.php");

    $radius = $_POST['radius'];
    $resize = $_POST['resize'];
    $resizeTriangle = $_POST['resizeTriangle'];
    $length = $_POST['length'];
    $width = $_POST['width'];
    $base = $_POST['base'];
    $height = $_POST['height'];
    $circle = new Circle("Circle",$radius);
    $rectangle = new Rectangle("Rectangle",$length,$width);
    $triangle = new Triangle("Triangle",$base, $height);

    if (!empty($_POST['btnCalculate'])){

            echo "<h4>Shape: " . $circle->getName() . "</h4>";
            echo "<h4>Area " . $circle->calculateArea() . "</h4>";

            echo "<h4>Shape: " . $rectangle->getName() . "</h4>";
            echo "<h4>Area " . $rectangle->calculateArea() . "</h4>";


            echo "<h4>Shape: " . $triangle->getName() . "</h4>";
            echo "<h4>Area " . $triangle->calculateArea() . "</h4>";
    }

    if (!empty($_POST['btnResize'])){
        echo "<h4>Shape: " . $circle->getName() . "</h4>";
        echo "<h4>Resize Area " . $circle->resize($resize) . "</h4>";

        echo "<h4>Shape: " . $triangle->getName() . "</h4>";
        echo "<h4>Resize Area " . $triangle->resize($resize) . "</h4>";

    }





