<?php

  include 'employee.php';

  $employee1 = new Employee($_POST['nom'], $_POST['salary']);

  $employee1->printSalary();

?>