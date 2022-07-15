<?php
declare(strict_types=1);

class Group
{
    //Properties:
    private int $id;
    private string $name;
    private string $location;
    private int $teacher_assigned;

    //Constructor:
    /**
     * @param int $id
     * @param string $name
     * @param string $location
     * @param string $teacherName
     * @param string $studentName
     */
    public function __construct(array $row)
    {
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->location = $row['location'];
        $this->teacher_assigned = $row['teacher_assigned'];
    }

    //Getters:
    /**
     * @return int|mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed|string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return mixed|string
     */
    public function getTeacherName()
    {
        return $this->teacherName;
    }

    /**
     * @return mixed|string
     */
    public function getStudentName()
    {
        return $this->studentName;
    }

    public function getTeacherAssigned()
    {
        return $this->teacher_assigned;
    }

}