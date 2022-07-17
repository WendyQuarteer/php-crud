<?php
declare(strict_types = 1);

class StudentsController
{
    
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

            $allGroups = $groupLoader::loadGroups();
            require 'View/students/addStudent.php';

        } elseif(isset($GET['type']) && $GET['type'] === 'confirmAdd'){

            $newStudentName = $POST['student-name'];
            $newStudentEmail = $POST['student-email'];
            $newStudentGroup = $POST['student-group'];

            if($newStudentName && $newStudentEmail && $newStudentGroup) {

                $studentLoader->createStudent($newStudentName, $newStudentEmail, $newStudentGroup);
                $studentsArray = $studentLoader::loadStudents();
                require 'View/students/students.php';

            } else {

                echo "All Fields Must be Completed";
                $allGroups = $groupLoader::loadGroups();
                require 'View/students/addStudent.php';

            }

        } else {

            if(isset($POST['delete-student'])){

                $deletedStudentId = $POST['delete-student'];
                $studentLoader->deleteStudent($deletedStudentId);             

            }

            $studentsArray = $studentLoader::loadStudents();
            require 'View/students/students.php';

        }

    }
}