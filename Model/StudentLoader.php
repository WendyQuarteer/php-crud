<?php
declare(strict_types=1);

class StudentLoader extends Database {

    public function loadStudents():array
    {
        $sql = "SELECT st.id, st.name, st.email, gt.name AS groupName, tt.name AS teacherName
                FROM student_table st
                JOIN group_table gt
                JOIN teacher_table tt
                ON st.group_id = gt.id
                AND gt.teacher_assigned = tt.id";
        $query = $this->connect()->query($sql);
        $studentArray = [];
        while ($row = $query->fetch(PDO::FETCH_ASSOC)){
            echo '<pre>' . var_dump($row) . '</pre>';
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