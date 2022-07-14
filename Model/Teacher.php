<?php
declare(strict_types=1);

class Teacher
{
    //Properties:
    private string $name;
    private string $email;
    private array $students;

    //Constructor:
    /**
     * @param string $name
     * @param string $email
     * @param array $students
     */
    public function __construct(string $name, string $email, array $students)
    {
        $this->name = $name;
        $this->email = $email;
        $this->students = $students;
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
     * @return array
     */
    public function getStudents(): array
    {
        return $this->students;
    }
}
