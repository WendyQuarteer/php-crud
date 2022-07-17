<?php
declare(strict_types=1);

class Student extends Teacher
{
    //Properties:
    private int $group_id;

    //Constructor:
    /**
     * @param int $group_id;
     */
    public function __construct(array $row, int $group_id)
    {
        parent::__construct($row);
        $this->group_id =  $group_id;
    }

    //Getters:
    /**
     * @return int
     */
    public function getGroup(): int
    {
        return $this->group_id;
    }
}
