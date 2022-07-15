<?php
declare(strict_types=1);

class Student extends Teacher
{
    //Properties:
    //private int $group;

    //Constructor:
    /**
     * @param int $group
     */
    public function __construct(array $row)
    {
        parent::__construct($row);
        //$this->group = $row['group_id'];
    }

    //Getters:
    /**
     * @return int
     */
    public function getGroup(): int
    {
        return $this->group;
    }




}
