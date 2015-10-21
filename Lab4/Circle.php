<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("Shape.php");
class Circle extends Shape
{
    private $radius;

    public function __construct($in_name,$in_radius)
    {
        parent::__construct( $in_name);
        $this->radius  = $in_radius;
    }

    public function calculateArea()
    {
        if($this->name) {
            $result = $this->radius * $this->radius;
            $result = $result * pi();
            return $result;
        }
        return 0;
    }
}