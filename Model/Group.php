<?php
declare(strict_types=1);

class Group
{
    //Properties:
    private int $id;
    private string $name;
    private string $location;
    private int $teacherId;
    //private array $studentID;//TODO: no students in table

    //Constructor:
    /**
     * @param int $id
     * @param array $name
     * @param string $location
     * @param int $teacherId
     // * @param array $studentId
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
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getGroups(): array
    {
        return $this->groups;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @return array
     */
    public function getTeachers(): array
    {
        return $this->teachers;
    }

    /**
     * @return array
     */
    public function getStudents(): array
    {
        return $this->students;
    }
}
