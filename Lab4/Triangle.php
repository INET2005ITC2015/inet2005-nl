<?php
require_once("Shape.php");
require_once("iResizeable.php");

class Triangle extends Shape implements iResizeable{
    private $base;
    private $height;

    public function __construct($in_name,$in_base, $in_height)
    {
        parent::__construct( $in_name);
        $this->base  = $in_base;
        $this->height  = $in_height;
    }

    public function calculateArea()
    {
        if($this->name) {
        $result = $this->base * $this->height ;
        $result = $result * (0.5)  ;
        return $result;
        }
        return 0;
    }

    // Interface method
    public function resize($sizeChange)
    {
        $percent = ($sizeChange / 100) * $this->height ;
        return $this->base * 0.5 * $percent;
    }
}