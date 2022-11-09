<?php

class Dog
{
    private string $name;
    private string $sex;
    private Dog $mother;
    private Dog $father;

    function __construct(string $name,string $sex) {
        $this->name = $name;
        $this->sex= $sex;

    }

    public function fathersName(): string {
        return $this->father->name ?? "Unknown";
    }

    public function hasSameMotherAs(Dog $otherDog): bool {
        return $this-> mother === $otherDog-> mother;
    }
}
//Nesapratu kā tālāk pildīt.
