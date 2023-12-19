<?php

class Employee {
    public $Firstname;
    public $lasttname;
    public $age;
    public $sex;
    public $Department;
    public function works() {
        echo 'mond!';
      }
      public function __construct($Firstname,$lasttname) {


        $this->$Firstname = 'Tsegaye';
        $this->$lasttname = 'Bekele';


      }
   
  }
  
  $emp1 = new Employee();
  
  $emp1->$Firstname = 'Tsegaye';
  $emp1->$Department = 'Bekele';
  $emp1->$Department = 'Finance';
  $emp1->$age = 40;
  $emp1->$sex ='m';
 
  
  var_dump($emp1);
  
  
  
?>
