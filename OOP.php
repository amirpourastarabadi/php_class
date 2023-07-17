<?php

// class getSkinType
// {
//     private string $type;

//     public function getType()
//     {
//         return $this->type;
//     }
// }

// abstract class Animal implements AnimalInterface
// {
//     public $skin;

//     public abstract function getSkinType():string;

//     public function getType():string
//     {
//         return static::class;
//     }
// }

// interface AnimalInterface
// {
//     public function getSkinType():string;

//     public function getType():string;
// }

// class Human extends Animal implements AnimalInterface
// {
//     public function getSkinType():string
//     {
//         return "hairy skin";
//     }
// }

// class Tiger extends Animal
// {
//     public function getSkinType():string
//     {
//         return "very hairy skin";
//     }
// }

// ///////////////////////////////////////
// $animals = [new Human(), new Tiger()];

// foreach ($animals as $animal) {
//     echo $animal->getSkinType() . PHP_EOL;
//     echo $animal->getType() . PHP_EOL;
// }


// class Human
// {
//     public function __construct()
//     {

//     }

// }

// class Student extends Human
// {
//     protected string $id;
//     protected string $name;

//     public function __construct($id, $name = "amir")
//     {
//         parent::__construct();

//         $this->id = $id;
//         $this->name = $name;
//     }

//     public function getId()
//     {
//         return $this->id;
//     }

//     public function getName(): string
//     {
//         return $this->name;
//     }
// }

// class CheckStudentValidations
// {
//     public static function isIDValid(Student $s)
//     {
//         return strlen($s->getid() === 10);
//     }

//     public static function isNameValid(Student $s)
//     {
//         return strlen($s->getName() >= 3);
//     }
// }

// /////////
// $s = new Student('1234567890');

// CheckStudentValidations::isIDValid($s);

