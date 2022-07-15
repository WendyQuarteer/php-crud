<?php
declare(strict_types=1);

class Student extends Teacher
{
    private int $group;

    /**
     * @param int $group
     */
    public function __construct(array $row)
    {
        parent::__construct($row);
        $this->group = $row['group_id'];
    }

    /**
     * @return int
     */
    public function getGroup(): int
    {
        return $this->group;
    }




}
