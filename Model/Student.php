<?php
declare(strict_types=1);

class Student extends Teacher
{
    //Properties:
    private string $groupName;
    private string $teacherName;


    //Constructor:
    /**
     * @param string $groupName;
     * @param string $teacherName;
     */
    public function __construct(array $row)
    {
        parent::__construct($row);
        $this->groupName = $row['groupName'];
        $this->teacherName = $row['teacherName'];
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
