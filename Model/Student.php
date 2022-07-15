<?php
declare(strict_types=1);

class Student extends Teacher
{
    //Constructor:
    /**
     * @param string $groupName;
     * @param string $teacherName;
     */
    public function __construct(array $row)
    {
        parent::__construct($row);
    }

    //Getters:
    /**
     * @return int
     */
    public function getGroup(): int
    {
        return $this->groupName;
    }

    /**
     * @return mixed|string
     */
    public function getTeacher(): int
    {
        return $this->teacherName;
    }
}
