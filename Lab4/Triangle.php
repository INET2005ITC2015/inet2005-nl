<?php
require_once("Shape.php");
class Triangle extends Shape{
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
}