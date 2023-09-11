<?php
/*
$test = ['js','php','ruby','java'];
$test[] = 'c#';
foreach ($test as $item) {

    echo $item . "</br>";
}

$c = count($test);
echo $c; */

$arr = [9,4,28,40,15,98,200,14,10,5];

//  ищет  в массиве самую большую цифру
/*$maxNumber = max($arr);
echo 'самое большое число ' . $maxNumber;*/

// счетаеть и разделяеть на цифру который мы задаем.
/*for ($i = 0 ; $i <= count($arr); $i ++) {
    if ($arr[$i] % 9 == 0) {
        echo $arr[$i] . "</br>";
    }
}*/

/*for ($i = 0 ; $i <= count($arr); $i ++) {
    if ($arr[$i] ) {
        echo $arr[$i] . "</br>";
    }
}*/

// ООП
 class Car
 {
     private $color;
     private $yuar;
     private $manufacturer;
     private $engine;

     public function __construct($color,$yuar,$izgotovitel,$newEngine)
     {
         $this->color = $color;
         $this->yuar = $yuar;
         $this->manufacturer = $izgotovitel;

         $this->engine = $newEngine;

     }

     public function changeColor($color)
     {
         $this->color = $color;
     }

     public function startEngine ()
     {
         $this->engine->on();

     }
     public function go ()
     {

     }



}



 Class Engine
 {
     public function on()
     {

     }
     public function of()
     {
     }
 }
$engine = new Engine();
$engine->of();
$myCar1 = new Car('white','2006','BMW',$engine);
$myCar1->changeColor('withe');


function func($arg) {

    for ($i=1 ; $i<=$arg; $i++) {
        echo $i;
    }
}

$student_scores = array(
    "Alice" => 95,
    "Bob" => 88,
    "Charlie" => 768
);

foreach ($student_scores as $name=>$score) {
    echo   $name . "\n";
}





//Наследование
/*Class Animal
{
    public $color;
    public $name;

    public function makeSound()
    {

    }
    public function move()
    {

    }
}
Class Cat extends Animal
{

}

$myCat = new Cat();
$myCat->color = 'red';
$myCat->name = 'cat';
$myCat->makeSound();*/

// trait - Это набор методов для того что бы при необходимости подключить к класс что бы не дублировать код
/*trait myGreetings
{
    public function sayHi()
    {

    }
    public function greet($person)
    {
        echo 'greetings' . $person . "</br>";
    }
}

Class Person
{
    use myGreetings;
}
$myPerson = new Person();
$myPerson ->sayHi();
$myPerson ->greet('hi');
$myPerson ->greet('hi');*/
