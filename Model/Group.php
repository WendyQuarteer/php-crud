<?php
declare(strict_types=1);

class Group
{
    //Properties:
    private int $id;
    private string $name;
    private string $location;
    private int $teacherId;
    private array $studentID;//TODO: no students in table

    //Constructor:
    /**
     * @param int $id
     * @param string $name
     * @param string $location
     * @param int $teacherId
     * // * @param array $studentId
     */
    public function __construct(array $row)
    {
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->location = $row['location'];
        $this->teacherId = $row['teacher_assigned'];
        //$this->studentId = $students; //TODO: no students in table
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
     * @return int|mixed
     */
    public function getTeacherId()
    {
        return $this->teacherId;
    }

    /**
     * @return array
     */
    public function getStudentID(): array //TODO: no students in table
    {
        return $this->studentID;
    }
}