<?php
declare(strict_types=1);

class Teacher {

    //Properties:
    private int $id;
    private string $name;
    private string $email;
    private string $studentNames;

    //Constructor:
    /**
     * @param int $id
     * @param string $name
     * @param string $email
     * @param string $studentNames
     */
    public function __construct(array $row)
    {
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->email = $row['email'];
        $this->studentNames = $row['studentNames'];
    }

    //Getters:
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

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
    public function getStudentNames(): string
    {
        return $this->studentNames;
    }

}

