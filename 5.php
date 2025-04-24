<?php
//String
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>";
var_dump($y);

//Integer
$x = 5985;
var_dump($x);

//Float
$x = 10.365;
var_dump($x);

//Boolean
$x = true;
var_dump($x);

//Array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

//Object
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "Volvo");
  var_dump($myCar);
?>
