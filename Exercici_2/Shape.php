<?php

  abstract class Shape{
    protected $width;
    protected $height;

    function __construct($width, $height){
      $this->width = $width;
      $this->height = $height;
    }

    public abstract function area();
  }

?>