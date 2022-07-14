<?php
declare(strict_types = 1);

class StudentsController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        //Work with some Models here?
        $conn = new Database();
        $db = $conn->connect();


        $sql = "SELECT * FROM student_table";
        $query = $db->query($sql);
        $studentArray = [];
        while ($row = $query->fetch(PDO::FETCH_ASSOC)){
            $student = new Student($row);
            $studentArray[] = $student;
        }
     echo '<pre>' ,  var_dump($studentArray) ,  '</pre>';





        //Display the Students View
        require 'View/students.php';
    }
}