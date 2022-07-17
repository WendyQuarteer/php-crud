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
            $student = new Student($row);
            $studentArray[] = $student;
        }
        return $studentArray;
    }

    //Create a new student:
    public function createStudent()
    {
        $sql = "INSERT INTO student_table (name, email) 
                VALUES ('$name', '$email')";
        $query = $this->connect()->query($sql);
        if ($query === true) {
            echo "New student added successfully";
        } else {
            echo "failed to add new student!";
        }
    }

    public function editStudent(){

        //Edit student

    }

    public function deleteStudent(){

        //Delete students

    }

}