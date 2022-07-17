<?php
declare(strict_types = 1);

class TeachersController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        $teacherLoader = new TeacherLoader();
        $teachers =$teacherLoader->loadTeachers();

        //Display the Teachers View
        require 'View/teachers/teachers.php';
        require 'View/teachers/detailTeacher.php';
        require 'View/teachers/editTeacher.php';
        require 'View/teachers/deleteTeacher.php';

    }
}