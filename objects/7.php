<?php

class Dog
{
    private string $name;
    private string $sex;
    private Dog $mother;
    private Dog $father;

    public function __construct(string $name, string $sex, Dog $mother = null, Dog $father = null)
    {
        $this->name = $name;
        $this->sex = $sex;
        if (isset($mother)) {
            $this->mother = $mother;
        }
        if (isset($father)) {
            $this->father = $father;
        }
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function fathersName(): string
    {
        if (!isset($this->father)) {
            return "Unknown";
        }
        return $this->father->name;
    }

    public function hasSameMotherAs(Dog $anotherDog): bool
    {
        return (
            isset($this->mother) &&
            isset($anotherDog->mother) &&
            $this->mother->name === $anotherDog->mother->name
        );
    }
}

//Nesapratu kā tālāk pildīt.