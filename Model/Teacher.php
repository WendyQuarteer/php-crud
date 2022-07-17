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
     * @return int|mixed
     */
    public function getId(): mixed
    {
        return $this->id;
    }

    /**
     * @return mixed|string
     */
    public function getName(): mixed
    {
        return $this->name;
    }

    /**
     * @return mixed|string
     */
    public function getEmail(): mixed
    {
        return $this->email;
    }

    /**
     * @return mixed|string
     */
    public function getStudentNames(): mixed
    {
        return $this->studentNames;
    }
}

