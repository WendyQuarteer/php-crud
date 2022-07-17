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

        } elseif(isset($GET['type']) && $GET['type'] === 'edit'){
            
            $studentToEditId = $POST['selected-student'];

            $studentToEdit = $studentLoader->loadStudentById($studentToEditId);
            $groupStudentToEdit = $groupLoader->loadGroupById($studentToEdit->getGroup());
            $groupsArray = $groupLoader::loadGroups();

            require 'View/students/editStudent.php';

        } else {

            if(isset($POST['confirm-add'])){

                $newStudentName = $POST['student-name'];
                $newStudentEmail = $POST['student-email'];
                $newStudentGroup = $POST['student-group'];
    
                if($newStudentName && $newStudentEmail && $newStudentGroup) {
    
                    $studentLoader->createStudent($newStudentName, $newStudentEmail, $newStudentGroup);
    
                } else {
    
                    echo "All Fields Must be Completed";
                    $allGroups = $groupLoader::loadGroups();
                    require 'View/students/addStudent.php';
    
                }

            }

            if(isset($POST['delete-student'])){

                $deletedStudentId = $POST['delete-student'];
                $studentLoader->deleteStudent($deletedStudentId);             

            }

            if(isset($POST['confirm-edit'])){

                $newStudentName = $POST['student-name'];
                $newStudentEmail = $POST['student-email'];
                $newStudentGroup = $POST['student-group'];
                $studentId = $POST['student-id'];

                if($newStudentName && $newStudentEmail && $newStudentGroup && $studentId){

                    $studentLoader->editStudent($newStudentName, $newStudentEmail, $newStudentGroup, $studentId);

                } else {

                    echo "Invalid fields entered. Aborting edit";

                }

            }

            $studentsArray = $studentLoader::loadStudents();
            require 'View/students/students.php';

        }

    }
}