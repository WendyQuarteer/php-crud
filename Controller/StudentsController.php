<?php
declare(strict_types = 1);

class StudentsController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        $studentLoader = new StudentLoader();

        $studentLoader->loadStudents();




        //Display the Students View
        require 'View/students.php';
    }
}