<?php

class Triangle
{
    private $side1;
    private $side2;
    private $side3;
    function __construct($side_one, $side_two, $side_three)
    {
        $this->side1 = $side_one;
        $this->side2 = $side_two;
        $this->side3 = $side_three;
    }
    function getSide1()
    {
        return $this->side1;
    }
    function getSide2()
    {
        return $this->side2;
    }
    function getSide3()
    {
        return $this->side3;
    }
    function isTriangle()
    {
        if ($this->getSide1() + $this->getSide2() <= $this->getSide3() || $this->getSide3() + $this->getSide1() <= $this->getSide2() || $this->getSide2() + $this->getSide3() <= $this->getSide1()) {
            echo "That is not a triangle.";
        } elseif ($this->getSide1() == $this->getSide2() && $this->getSide2() == $this->getSide3()) {
            echo "Your triangle is equilateral!";
        } elseif ($this->getSide1() == $this->getSide2() && $this->getSide2() != $this->getSide3() || $this->getSide2() == $this->getSide3() && $this->getSide3() != $this->getSide1() || $this->getSide1() == $this->getSide3() && $this->getSide2() != $this->getSide1()) {
            echo "Your triangle is isosceles";
        } elseif ($this->getSide1() != $this->getSide2() && $this->getSide2() != $this->getSide3() || $this->getSide3() != $this->getSide1()) {
            echo "Your triangle is scalene.";
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Triangles</title>
</head>
<body>
    <h1>Is Triangle?</h1>
        <?php 
$side_one = $_GET["side1"];
$side_two = $_GET["side2"];
$side_three = $_GET["side3"];
$new_triangle = new Triangle($side_one, $side_two, $side_three);
$get_triangle = $new_triangle->isTriangle();
echo "<p>" . $get_triangle . "</p>";
?>

</body>
</html>
