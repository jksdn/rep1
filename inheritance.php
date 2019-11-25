<?php

/**
 * Person.php
 */
class Person
{
    private $firstName;
    private $lastName;
    private $gender;

    /**
     * Create a new person instance
     */
    public function __construct($firstName, $lastName, $gender = 'm')
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
    }

    /**
     * The string representation of this instance as "[firstname] [lastname]"
     */
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

    /**
     * Create a new employee instance
     */
    public function __construct($firstName, $lastName, $gender = 'm',
        $job, $company)
    {
        parent::__construct($firstName, $lastName, $gender);

        $this->job = $job;
        $this->company = $company;
    }

    /**
     * The string representation of this instance as "Work as [job] at
     * [company]"
     */
    public function __toString()
    {
        return 'Work as' . ' ' . $this->job . ' at ' . $this->company;
    }
}

echo '<p>' . (new Employee('John', 'Doe', 'Frontend Developer', 'Google'))
    . '</p>';

echo '<p>' . (new Person('John', 'Doe')) . '</p>';
echo '<p>' . (new Person('Jane', 'Doe')) . '</p>';