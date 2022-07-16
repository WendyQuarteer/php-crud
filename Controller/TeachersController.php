<?php
declare(strict_types = 1);

class TeachersController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        $teacherLoader = new TeacherLoader();
        $studentLoader = new StudentLoader();

        if(isset($GET['type']) && $GET['type'] === 'detail') {

            $selectedTeacher = $teacherLoader->loadTeacherById($POST["selected-teacher"]);
            $studentsAssigned = $studentLoader->loadTeacherStudents($selectedTeacher->getId());
            
            require 'View/teachers/detailTeacher.php';

        } else {

           $teachersArray = $teacherLoader->loadTeachersLuk();

            require 'View/teachers/teachers.php';

        }

    }
}