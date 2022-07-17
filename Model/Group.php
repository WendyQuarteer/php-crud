<?php
declare(strict_types=1);

class Group
{
    //Properties:
    private int $id;
    private string $name;
    private string $location;
    private string $teacherName;
    private string $students;

    //Constructor:
    /**
     * @param int $id
     * @param string $name
     * @param string $location
     * @param string $teacherName
     * @param string $students
     */
    public function __construct(array $row)
    {
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->location = $row['location'];
        $this->teacherName = $row['teacherName'];
        $this->students = $row['studentName'];
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
    public function getLocation(): mixed
    {
        return $this->location;
    }

    /**
     * @return mixed|string
     */
    public function getTeacherName(): mixed
    {
        return $this->teacherName;
    }

    /**
     * @return mixed|string
     */
    public function getStudentNames(): mixed
    {
        return $this->students;
    }
}