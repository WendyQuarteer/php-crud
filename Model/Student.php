<?php
declare(strict_types=1);

class Student
{
    //Properties:
    private int $id;
    private string $name;
    private string $email;
    private int $group;

    //Constructor:
    /**
     * @param int $id
     * @param string $name
     * @param string $email
     * @param int $group
     */
    public function __construct(array $row)
    {
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->email = $row['email'];
        $this->group = $row['group_id'];
    }

    //Getters:
    /**
     * @return int
     */
    public function getId():int
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
     * @return int
     */
    public function getGroup(): int
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

