<?php
class Animal {
    public $age;
  
    public function eat() {
      echo 'the animal is eating';
    }
  }
  
  class Dog extends Animal {
    public function eat() {
      echo 'the dog is eating';
    }
  }
  

?>