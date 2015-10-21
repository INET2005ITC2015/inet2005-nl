<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
abstract class Shape
{
    protected $name;

    // Abstract methods
    abstract public function calculateArea();

    public function __construct($in_name)
    {
        $this->name = $in_name;

    }

    public function getName()
    {
        return ($this->name);
    }


}

