<?php
declare(strict_types=1);

class Student
{
    //Properties:
    private int $id;
    private string $name;
    private string $email;
    private string $groupName;
    private string $teacherName;

    //Constructor:
    /**
     * @param int $id
     * @param string $name
     * @param string $email
     * @param string $groupName
     * @param string $teacherName
     */
    public function __construct(array $row)
    {
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->email = $row['email'];
        $this->groupName = $row['groupName'];
        $this->teacherName = $row['teacherName'];
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
    public function getGroupName(): mixed
    {
        return $this->groupName;
    }

    /**
     * @return mixed|string
     */
    public function getTeacherName(): mixed
    {
        return $this->teacherName;
    }
}
