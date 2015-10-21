<?php
require_once("Shape.php");
class Rectangle extends Shape{
    private $length;
    private $width;

    public function __construct($in_name,$in_length, $in_width)
    {
        parent::__construct( $in_name);
        $this->length  = $in_length;
        $this->width  = $in_width;
    }

    public function calculateArea()
    {
        if($this->name) {
            $result = $this->length * $this->width;
            return $result;
        }
        return 0;
    }
}