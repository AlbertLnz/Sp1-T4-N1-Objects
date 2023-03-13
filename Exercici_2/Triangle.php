<?php

  class Triangle extends Shape{

    function __construct($width, $height){
      parent::__construct($width, $height);
    }

    function area(){
      return ($this->width*$this->height)/2; //con return pq devuelve valor
    }

  }

?>