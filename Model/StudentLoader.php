<?php
declare(strict_types=1);

class StudentLoader extends Database {

    public function loadStudents():array
    {
        $sql = "SELECT * FROM student_table";
        $query = $this->connect()->query($sql);
        $studentArray = [];
        while ($row = $query->fetch(PDO::FETCH_ASSOC)){
            $student = new Student($row);
            $studentArray[] = $student;
        }
        return $studentArray;
    }

    public function createStudent(){

        //Create student

    }

    public function editStudent(){

        //Edit student

    }

    public function deleteStudent(){

        //Delete students

    }

}