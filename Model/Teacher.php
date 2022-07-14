<?php
declare(strict_types=1);

class Teacher extends Student
{
    //Properties:

    //Constructor:
    public function __construct($name, $email, $group)
    {
        parent::__construct($name, $email, $group);
    }
    //Getters are extended from Student.
}
