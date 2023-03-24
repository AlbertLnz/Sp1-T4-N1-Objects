<?php

  class Triangle extends Shape{

    function __construct($width, $height){
      $this->width = $width;
      $this->height = $height;
    }

    public function area(){
      return ($this->width*$this->height)/2;
    }

  }

?>