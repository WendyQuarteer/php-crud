<?php
declare(strict_types=1);

class Group
{
    //Properties:
    private array $groups;
    private string $location;
    private array $teachers;
    private array $students;

    //Constructor:
    /**
     * @param array $groups
     * @param string $location
     * @param array $teachers
     * @param array $students
     */
    public function __construct(array $row)
    {
        $this->groups = $groups;
        $this->location = $location;
        $this->teachers = $teachers;
        $this->students = $students;
    }

    //Getters:
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
