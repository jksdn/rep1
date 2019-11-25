<?php

/**
 * Person.php
 */
class Person
{
    private $firstName;
    private $lastName;
    private $gender;

    public function __construct($firstName, $lastName, $gender = 'm')
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
    }

    public function __toString()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

/**
 * Employee.php
 */
class Employee extends Person
{
    private $job;
    private $company;

    public function __construct($firstName, $lastName, $gender = 'm',
        $job, $company)
    {
        parent::__construct($firstName, $lastName, $gender);

        $this->job = $job;
        $this->company = $company;
    }

    public function __toString()
    {
        return 'Work as' . ' ' . $this->job . ' at ' . $this->company;
    }
}

echo '<p>' . (new Employee('Mary', 'Doe', 'Frontend Developer', 'Google'))
    . '</p>';

echo '<p>' . (new Person('John', 'Doe')) . '</p>';
echo '<p>' . (new Person('Jane', 'Doe')) . '</p>';