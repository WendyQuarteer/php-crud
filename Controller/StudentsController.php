<?php
declare(strict_types = 1);

class StudentsController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {

        $studentLoader = new StudentLoader();
        $students = $studentLoader->loadStudents();


        if (isset($_POST['submit'])) {
            echo "pressed";
            if (isset ($_POST['name']) && isset ($_POST['email'])) {
                if (!empty($_POST['name']) && !empty($_POST['email'])) {
                    $name = $this->connect()->real_escape_string($_POST['name']);
                    $email = $this->connect()->real_escape_string($_POST['email']);
                    $addStudent = $studentLoader->createStudent();
                }
            }
        }

        //Display the Students View
        require 'View/students/students.php';
        require 'View/students/addStudent.php';
        require 'View/students/detailStudent.php';
        require 'View/students/editStudent.php';
        require 'View/students/deleteStudent.php';

    }

}