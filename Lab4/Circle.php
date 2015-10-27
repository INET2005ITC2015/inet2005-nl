<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once("Shape.php");
require_once("iResizeable.php");

class Circle extends Shape implements iResizeable
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

    // Interface method
    public function resize($sizeChange)
    {
        $radiusSquare = $this->radius * $this->radius;
        $percent = ($sizeChange / 100) * $radiusSquare;
        return  pi() * $percent;
    }
}