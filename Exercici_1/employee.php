<?php
  class Employee{

    public $nom;
    public $salary;

    function __construct($nom, $salary){
      $this->nom = $nom;
      $this->salary = $salary;
    }

    function printSalary(){
      echo "Hola ".$this->nom;
      if($this->salary > 6000){
        echo (", com cobres ").$this->salary.("€, SÍ has de pagar impostos");
      }else{
        echo (", com cobres ").$this->salary.("€, NO has de pagar impostos");
      }
    }

  }
?>