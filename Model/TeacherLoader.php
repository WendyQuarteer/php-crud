<?php
declare(strict_types=1);

class TeacherLoader extends Database {

    public function loadTeachers():array
    {
        $sql = "SELECT tt.id, tt.name, tt.email, st.name as studentNames
                FROM group_table gt
                JOIN teacher_table tt
                JOIN student_table st
                ON gt.teacher_assigned = tt.id
                AND st.group_id = gt.id";
        $query = $this->connect()->query($sql);
        $teachersArray = [];
        while ($row = $query->fetch(PDO::FETCH_ASSOC)){
            var_dump($row);
            $teacher = new Teacher($row);
            $teachersArray[] = $teacher;
        }
       return $teachersArray;


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