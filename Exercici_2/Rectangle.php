<?php

  class Rectangle extends Shape{

    function __construct($width, $height){
      parent::__construct($width, $height);
    }

    function area(){
      return ($this->width*$this->height); //con return pq devuelve valor
    }

  }
  
?>