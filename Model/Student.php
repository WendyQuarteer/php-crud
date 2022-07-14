<?php
declare(strict_types=1);

class Student
{
    //Properties:
    private string $name;
    private string $email;
    private string $group;
    private string $teacher;

    //Constructor:
    /**
     * @param string $name
     * @param string $email
     * @param string $group
     * @param string $teacher
     */
    public function __construct(string $name, string $email, string $group, string $teacher)
    {
        $this->name = $name;
        $this->email = $email;
        $this->group = $group;
        $this->teacher = $teacher;
    }

    //Getters:
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * @return string
     */
    public function getTeacher(): string
    {
        return $this->teacher;
    }





}

