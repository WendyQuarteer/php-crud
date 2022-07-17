<?php
declare(strict_types = 1);

class StudentsController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $studentLoader = new StudentLoader();
        $groupLoader = new GroupLoader();
        $teacherLoader = new TeacherLoader();

        if(isset($GET['type']) && $GET['type'] === 'detail'){

            $selectedStudent = $studentLoader->loadStudentById($POST['selected-student']);
            $selectedStudentsGroup = $groupLoader->loadGroupById($selectedStudent->getGroup());
            $selectedStudentsTeacher = $teacherLoader->loadTeacherById($selectedStudentsGroup->getTeacherAssigned());

            require 'View/students/detailStudent.php';

        } elseif(isset($GET['type']) && $GET['type'] === 'add'){

            $allGroups = $groupLoader->loadGroupsLuk();
            require 'View/students/addStudent.php';

        } elseif(isset($GET['type']) && $GET['type'] === 'confirmAdd'){

            $newStudentName = $POST['student-name'];
            $newStudentEmail = $POST['student-email'];
            $newStudentGroup = $POST['student-group'];

            if($newStudentName && $newStudentEmail && $newStudentGroup) {

                $studentLoader->createStudent($newStudentName, $newStudentEmail, $newStudentGroup);
                $toBeUsedInView = $studentLoader->loadStudentsLuk();
                require 'View/students/students.php';

            } else {

                echo "All Fields Must be Completed";
                $allGroups = $groupLoader->loadGroupsLuk();
                require 'View/students/addStudent.php';

            }

        } else {

            $toBeUsedInView = $studentLoader->loadStudentsLuk();
            require 'View/students/students.php';

        }


        //Display the Students View
        
        // require 'View/students/detailStudent.php';
        // require 'View/students/editStudent.php';
        // require 'View/students/deleteStudent.php';

    }
}