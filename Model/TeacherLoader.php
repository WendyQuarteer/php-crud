<?php
declare(strict_types=1);

class TeacherLoader extends Database {

    public function loadTeachers():void//TODO: change to array
    {
        $sql = "SELECT * FROM teacher_table";
        $query = $this->connect()->query($sql);
        $teachersArray = [];
        while ($row = $query->fetch(PDO::FETCH_ASSOC)){
            $teacher = new Teacher($row);
            $teachersArray[] = $teacher;
        }
        var_dump($teachersArray);//TODO: change to return


    }

    public function createTeacher(){

        //Create teacher

    }

    public function editTeacher(){

        //Update teacher

    }

    public function deleteTeacher(){

        //Delete teachers

    }

}