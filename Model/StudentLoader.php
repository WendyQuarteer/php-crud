<?php
declare(strict_types=1);

class StudentLoader extends Database {

    public function loadStudents():void//TODO: change to array
    {
        $sql = "SELECT * FROM student_table";
        $query = $this->connect()->query($sql);
        $studentArray = [];
        while ($row = $query->fetch(PDO::FETCH_ASSOC)){
            $student = new Student($row);
            $studentArray[] = $student;
        }
        var_dump($studentArray);//TODO: change to return
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