<?php
declare(strict_types=1);

class Teacher extends Student
{
    //Constructor:
    public function __construct(array $row)
    {
        parent::__construct($row);
    }


    //Getters are extended from Student.
}
