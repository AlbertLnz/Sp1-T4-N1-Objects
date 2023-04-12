<?php

  class Rectangle extends Shape{

    function __construct($width, $height){
      parent::__construct($width, $height);
    }

    public function area(){
      return ($this->width*$this->height);
    }

  }
  
?>