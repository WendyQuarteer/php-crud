<?php
declare(strict_types = 1);

class TeachersController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        $teacherLoader = new TeacherLoader(); //TODO: create a group_id in Teacher php OR turn extend towards Student.

        $teacherLoader->loadTeachers();

        //Display the Teachers View
        require 'View/teachers.php';
    }
}