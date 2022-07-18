<?php
declare(strict_types=1);

class Student extends Teacher
{
    // private int $id;
    // private string $name;
    // private string $email;
    // private int $group_id;
    //Constructor:
    /**
     * @param string $groupName;
     * @param string $teacherName;
     */
    public function __construct(array $row, int $group_id)
    {
        parent::__construct($row);
        $this->group_id = $group_id;

    }

    //Getters:
    /**
     * @return int
     */
    public function getGroup(): int
    {
        return $this->group_id;
    }

    /**
     * @return mixed|string
     */
    public function getTeacher(): int
    {
        return $this->teacherName;
    }
}
