<?php

/**
 * Person.php
 */
class Person
{
    /**
     * Store the firstname field.
     * 
     * @var string
     */
    private $firstName;

    /**
     * Store the lastname field.
     * 
     * @var string
     */
    private $lastName;

    /**
     * Store the gender field.
     * 
     * @var string
     */
    private $gender;

    /**
     * Create a new person instance
     * 
     * @param  string $firstName
     * @param  string $lastName
     * @param  string $gender
     * @return void
     */
    public function __construct($firstName, $lastName, $gender = 'm')
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
    }

    /**
     * The (string) representation of this Person as "[firstname] [lastname]"
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
    /**
     * Store the job field.
     * 
     * @var string
     */
    private $job;

    /**
     * Store the company field.
     * 
     * @var string
     */
    private $company;

    /**
     * Create a new employee instance
     * @param  string $firstName
     * @param  string $lastName
     * @param  string $gender
     * @param  string $job
     * @param  string $company
     * @return void
     */
    public function __construct($firstName, $lastName, $gender = 'm',
        $job, $company)
    {
        parent::__construct($firstName, $lastName, $gender);

        $this->job = $job;
        $this->company = $company;
    }

    /**
     * The (string) representation of this Person as "Work as [job] at
     * [company]"
     */
    public function __toString()
    {
        return 'Work as' . ' ' . $this->job . ' at ' . $this->company;
    }
}

echo '<p>' . (new Employee('Mary', 'Doe', 'Frontend Developer', 'Google'))
    . '</p>';

echo '<p>' . (new Person('John', 'Doe')) . '</p>';
echo '<p>' . (new Person('Jane', 'Doe')) . '</p>';