<?php

class Dog
{
    private string $name;
    private string $sex;
    private ?Dog $mother;
    private ?Dog $father;

    public function __construct(string $name, string $sex, ?Dog $mother = null, ?Dog $father = null)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function getFather(): ?Dog {
        if ($this->father === null) {
            return "Unknown";
        } else {
            return $this->father;
        }
    }
    public function hasTheSameMother(Dog $dog): bool {
        if ($dog->getMother() === null || $this->getMother() === null)
            if ($dog->mother === $this->mother) {
                return true;
            } else {
                return false;
            }
    }
}

class DogTest
{
    private Dog $dog;

    public function __construct (string $name, string $sex, Dog $motherDog, Dog $fatherDog){
        $this->dog->name = $name;
        $this->dog->sex = $sex;
        $this->dog->mother = $motherDog;
        $this->dog->father = $fatherDog;
    }
}

$lady = new Dog('Lady', 'female');
$sam = new Dog('Sam', 'male');
$molly = new Dog('Molly', 'female');
$rocky = new Dog('Rocky', 'male');
$max = new Dog('Max', 'male', $lady, $rocky);
$sparky = new Dog('Sparky', 'male');
$buster = new Dog('Buster', 'male');
$coco = new Dog('Coco', 'female');

$dogs = [
    $max,
    $rocky,
    $sparky,
    $buster,
    $sam,
    $lady,
    $molly,
    $coco
];

foreach ($dogs as $dog) {
    echo
}
